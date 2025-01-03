<?php

declare(strict_types=1);

use App\Http\Middleware\AddContentSecurityPolicyHeaders;
use App\Http\Middleware\UserIdMiddleware;
use App\Models\User;
use CodeLieutenant\LaravelCrypto\ServiceProvider as LaravelCryptoServiceProvider;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Encryption\EncryptionServiceProvider as LaravelEncryptionServiceProvider;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets;
use Illuminate\Http\Middleware\TrustHosts;
use Illuminate\Http\Middleware\TrustProxies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: AddLinkHeadersForPreloadedAssets::class);
        $middleware->web(append: AddContentSecurityPolicyHeaders::class);
        $middleware->web(append: UserIdMiddleware::class);
    })
    ->withProviders([
        LaravelEncryptionServiceProvider::class => LaravelCryptoServiceProvider::class,
    ])
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->booting(function () {
        Gate::before(static fn (User $user) => $user->isOwner() ? true : null);

        TrustHosts::at([config('app.domain')]);
        EncryptCookies::except([UserIdMiddleware::COOKIE_NAME]);
        TrustProxies::at('*');
        TrustProxies::withHeaders(
            Request::HEADER_X_FORWARDED_FOR |
            Request::HEADER_X_FORWARDED_HOST |
            Request::HEADER_X_FORWARDED_PORT |
            Request::HEADER_X_FORWARDED_PROTO
        );

    })
    ->create();
