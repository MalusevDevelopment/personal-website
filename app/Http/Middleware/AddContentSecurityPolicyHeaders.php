<?php

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

    public function __construct(private Repository $config)
    {
        $this->domain = $this->config->get('app.domain');
        $this->umamiDomain = parse_url($this->config->get('umami.script'), PHP_URL_HOST);
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
            'Content-Security-Policy' => $this->value(),
        ]);
    }

    protected function baseDomain(): string
    {
        return "base-uri $this->domain";
    }

    protected function frameSrc(): string
    {
        return "frame-src 'self' https://github.com";
    }

    protected function frameAncestors(): string
    {
        return "frame-ancestors 'self' https://github.com";
    }

    protected function scriptSrc(): string
    {
        $nonce = Vite::cspNonce();

        return "script-src 'nonce-$nonce' 'sha256-abS8bXelr2wTMtWfwv4Q2SgF9jc3EmpFalJLyucKH4o=' https://$this->domain https://$this->umamiDomain";
    }

    protected function imgSrc(): string
    {
        return "img-src https://$this->domain";
    }

    protected function objectSrc(): string
    {
        return "object-src 'none'";
    }

    protected function fontSrc(): string
    {
        return "font-src 'unsafe-inline'";
    }

    protected function childSrc(): string
    {
        return "child-src 'none'";
    }

    private function value(): string
    {
        return implode('; ', [
            $this->baseDomain(),
            $this->scriptSrc(),
            $this->imgSrc(),
            $this->objectSrc(),
            $this->fontSrc(),
            $this->childSrc(),
            $this->frameSrc(),
            $this->frameAncestors(),
        ]);
    }
}
