<?php

declare(strict_types=1);

use App\Http\Middleware\AddContentSecurityPolicyHeaders;
use App\Http\Middleware\UserIdMiddleware;
use App\Models\User;
use CodeLieutenant\LaravelCrypto\ServiceProvider as LaravelCryptoServiceProvider;
use Illuminate\Encryption\EncryptionServiceProvider as LaravelEncryptionServiceProvider;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets;
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
        $middleware->trustHosts(at: fn () => config('app.domain'));
        $middleware->encryptCookies([UserIdMiddleware::COOKIE_NAME]);
        $middleware->trustProxies(
            at: '*',
            headers: Request::HEADER_X_FORWARDED_FOR |
            Request::HEADER_X_FORWARDED_HOST |
            Request::HEADER_X_FORWARDED_PORT |
            Request::HEADER_X_FORWARDED_PROTO
        );
        $middleware->web(append: AddLinkHeadersForPreloadedAssets::class);
        $middleware->web(append: AddContentSecurityPolicyHeaders::class);
        $middleware->web(append: UserIdMiddleware::class);
    })
    ->withProviders(
        providers: [
            LaravelEncryptionServiceProvider::class => LaravelCryptoServiceProvider::class,
            CodeLieutenant\LaravelPgEnum\ServiceProvider::class,
            App\Providers\PulseServiceProvider::class,
            App\Providers\AppServiceProvider::class,
            App\Providers\Filament\AdminPanelProvider::class,
            App\Providers\HorizonServiceProvider::class,
            App\Providers\PulseServiceProvider::class,
            App\Providers\TelescopeServiceProvider::class,
            App\Providers\BladeDirectivesProvider::class,
        ],
        withBootstrapProviders: false,
    )
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->booting(function () {
        Gate::before(static fn (User $user) => $user->isOwner() ? true : null);
    })
    ->create();
