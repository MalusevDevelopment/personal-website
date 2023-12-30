<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Cookie\CookieJar;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;

class UserIdMiddleware
{
    public const string COOKIE_NAME = 'analytics';

    public function __construct(private readonly CookieJar $cookie)
    {
    }

    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $analytics = $request->cookie(self::COOKIE_NAME);

        if ($analytics === null) {
            $this->cookie->queue(
                new Cookie(
                    self::COOKIE_NAME,
                    uuid_create(UUID_TYPE_RANDOM),
                    httpOnly: false,
                    sameSite: Cookie::SAMESITE_STRICT,
                )
            );
        }

        return $next($request);
    }
}
