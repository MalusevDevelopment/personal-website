<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schedule;
use Spatie\ScheduleMonitor\Models\MonitoredScheduledTaskLogItem;

Schedule::command('horizon:snapshot')
    ->everyFiveMinutes()
    ->onOneServer()
    ->runInBackground();

Schedule::command('queue:monitor', [
    '--max' => 100,
    implode(',', config('horizon.defaults.supervisor-1.queue')),
])
    ->everyMinute()
    ->onOneServer()
    ->runInBackground();

Schedule::daily()
    ->runInBackground()
    ->onOneServer()
    ->timezone('Europe/Belgrade')
    ->group(function (): void {
        Schedule::command('telescope:prune');
        Schedule::command('sanctum:prune-expired');
        Schedule::command('model:prune', ['--model' => MonitoredScheduledTaskLogItem::class]);
        Schedule::command('queue:prune-failed');
        Schedule::command('queue:prune-batches');
    });

Schedule::command('pulse:clear')
    ->weekly()
    ->onOneServer()
    ->runInBackground();
