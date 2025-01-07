<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;
use Symfony\Component\HttpFoundation\Response;

readonly class AddContentSecurityPolicyHeaders
{
    private string $domain;

    private string $umamiDomain;

    public function __construct(private Repository $configRepository)
    {
        $this->domain = $this->configRepository->get('app.domain');
        $this->umamiDomain = parse_url($this->configRepository->get('services.umami.script'), PHP_URL_HOST);
    }

    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Vite::useCspNonce();

        return $next($request)->withHeaders([
            'Content-Security-Policy' => $this->value($request),
        ]);
    }

    protected function baseDomain(): string
    {
        return "base-uri $this->domain";
    }

    protected function frameSrc(Request $request): string
    {
        if ($request->decodedPath() === '/') {
            return 'frame-src https://github.com';
        }

        return 'frame-src none';
    }

    protected function frameAncestors(Request $request): string
    {
        if ($request->decodedPath() === '/') {
            return 'frame-ancestors https://github.com';
        }

        return "frame-ancestors 'none'";
    }

    protected function scriptSrc(Request $request): string
    {
        $nonce = Vite::cspNonce();

        return match (true) {
            str_starts_with($request->decodedPath(), $this->configRepository->get('pulse.path')) => "script-src 'self' 'unsafe-inline' 'unsafe-eval'",
            str_starts_with($request->decodedPath(), $this->configRepository->get('telescope.path')) => "script-src 'self' 'unsafe-inline' 'unsafe-eval'",
            str_starts_with($request->decodedPath(), $this->configRepository->get('horizon.path')) => "script-src 'self' 'unsafe-inline' 'unsafe-eval'",
            str_starts_with($request->decodedPath(), 'admin') => "script-src 'self' 'nonce-$nonce'",
            default => "script-src 'self' 'nonce-$nonce' 'unsafe-inline' https://$this->umamiDomain",
        };
    }

    protected function imgSrc(Request $request): string
    {
        return match (true) {
            str_starts_with($request->decodedPath(), $this->configRepository->get('pulse.path')) => "img-src 'self' data:",
            str_starts_with($request->decodedPath(), $this->configRepository->get('horizon.path')) => "img-src 'self' data:",
            str_starts_with($request->decodedPath(), 'admin') => "img-src 'self'",
            default => "img-src 'self'",
        };
    }

    protected function objectSrc(): string
    {
        return "object-src 'none'";
    }

    protected function fontSrc(): string
    {
        return "font-src 'self' 'unsafe-inline' https://fonts.bunny.net";
    }

    protected function childSrc(): string
    {
        return "child-src 'none'";
    }

    private function value(Request $request): string
    {
        return implode('; ', [
            $this->baseDomain(),
            $this->scriptSrc($request),
            $this->imgSrc($request),
            $this->objectSrc(),
            $this->fontSrc(),
            $this->childSrc(),
            $this->frameSrc($request),
            $this->frameAncestors($request),
        ]);
    }
}
