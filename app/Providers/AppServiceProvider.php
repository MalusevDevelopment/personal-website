<?php

declare(strict_types=1);

namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\ParallelTesting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        if ($this->app->isLocal()) {
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }

    public function boot(): void
    {
        if ($this->app->runningUnitTests()) {
            ParallelTesting::setUpTestDatabase(static function (string $database) {
                Artisan::call("db:seed --database=$database");
            });
        }
    }
}
