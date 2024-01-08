<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;
use Symfony\Component\HttpFoundation\Response;

class AddContentSecurityPolicyHeaders
{
    public function __construct(private readonly Repository $config)
    {
    }

    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Vite::useCspNonce();

        return $next($request)->withHeaders([
            'Content-Security-Policy' => $this->value(),
        ]);
    }


    private function value(): string
    {
        $nonce = Vite::cspNonce();
        $domain = $this->config->get('app.domain');
        $umamiDomain = parse_url($this->config->get('umami.script'), PHP_URL_HOST);

        return <<<CONTENT
        script-src 'nonce-$nonce' 'sha256-abS8bXelr2wTMtWfwv4Q2SgF9jc3EmpFalJLyucKH4o=' https://$umamiDomain https://$domain; object-src 'none'; base-uri $domain; img-src https://$domain; child-src 'none'; font-src 'unsafe-inline';
        CONTENT;
    }
}
