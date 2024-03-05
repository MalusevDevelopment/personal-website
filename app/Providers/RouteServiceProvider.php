<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use SodiumException;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/';

    public function boot(): void
    {
        RateLimiter::for(
            'api',
            static fn (Request $request) => Limit::perMinute(60)->by(self::getRateLimitKey($request)),
        );

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api/v1')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * @throws SodiumException
     */
    private static function getRateLimitKey(Request $request): string
    {
        $id = $request->user()?->id;

        if ($id !== null) {
            return $id;
        }

        $ip = $request->ip() ?? '';
        $browser = $request->userAgent() ?? '';

        return sodium_crypto_generichash($ip.$browser);
    }
}
