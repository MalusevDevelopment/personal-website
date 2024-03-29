<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schedule;
use Spatie\ScheduleMonitor\Models\MonitoredScheduledTaskLogItem;

Schedule::command('horizon:snapshot')->everyFiveMinutes();
Schedule::command('telescope:prune')->daily();
Schedule::command('queue:monitor', [
    '--max' => 100,
    implode(',', config('horizon.defaults.supervisor-1.queue')),
])->everyMinute();
Schedule::command('queue:prune-batches')->daily();
Schedule::command('queue:prune-failed')->daily();
Schedule::command('model:prune', ['--model' => MonitoredScheduledTaskLogItem::class])->daily();
