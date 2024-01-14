<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\ParallelTesting;
use Laravel\Prompts\Prompt;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
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
