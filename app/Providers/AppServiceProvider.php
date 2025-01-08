<?php

declare(strict_types=1);

namespace App\Providers;

use App\Enums\Queue;
use App\Services\PostService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Spatie\CpuLoadHealthCheck\CpuLoadCheck;
use Spatie\Health\Checks\Checks\CacheCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use Spatie\Health\Checks\Checks\DatabaseConnectionCountCheck;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Checks\Checks\HorizonCheck;
use Spatie\Health\Checks\Checks\OptimizedAppCheck;
use Spatie\Health\Checks\Checks\QueueCheck;
use Spatie\Health\Checks\Checks\RedisCheck;
use Spatie\Health\Checks\Checks\RedisMemoryUsageCheck;
use Spatie\Health\Checks\Checks\ScheduleCheck;
use Spatie\Health\Facades\Health;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(PostService::class);
    }

    public function boot(): void
    {
        Paginator::defaultView('components.pagination.default');

        $checks = [
            CacheCheck::new()->driver('redis'),
            RedisCheck::new(),
            QueueCheck::new()->onQueue(Queue::values()),
            ScheduleCheck::new(),
            HorizonCheck::new(),
            DatabaseCheck::new(),
            DatabaseConnectionCountCheck::new()
                ->warnWhenMoreConnectionsThan(70)
                ->failWhenMoreConnectionsThan(100),
            RedisMemoryUsageCheck::new()->failWhenAboveMb(1000),
            CpuLoadCheck::new()
                ->failWhenLoadIsHigherInTheLast5Minutes(2.0)
                ->failWhenLoadIsHigherInTheLast15Minutes(1.5),
        ];

        if ($this->app->environment('production')) {
            $checks = array_merge($checks, [
                OptimizedAppCheck::new()
                    ->checkConfig()
                    ->checkRoutes()
                    ->checkEvents(),
                EnvironmentCheck::new(),
                DebugModeCheck::new()->expectedToBe(false),
            ]);
        }

        Health::checks($checks);
    }
}
