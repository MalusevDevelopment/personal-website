<?php

declare(strict_types=1);

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use ReflectionException;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('horizon:snapshot')->everyFiveMinutes();
        $schedule->command('telescope:prune')->daily();
        $schedule->command('queue:monitor', [
            '--max' => 100,
            implode(',', config('horizon.defaults.supervisor-1.queue')),
        ])->everyMinute();
        $schedule->command('queue:prune-batches')->daily();
        $schedule->command('queue:prune-failed')->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @throws BindingResolutionException|ReflectionException
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
