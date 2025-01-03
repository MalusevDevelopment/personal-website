<?php

declare(strict_types=1);

namespace App\Providers;

use App\Services\PostService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(PostService::class);
    }

    public function boot(): void
    {
        Paginator::defaultView('components.pagination.default');
    }
}
