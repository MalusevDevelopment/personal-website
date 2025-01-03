<?php

declare(strict_types=1);

use App\Enums\Queue;

return [
    'use' => 'horizon',

    'waits' => collect(Queue::values())
        ->mapToDictionary(static fn (string $queue) => ['redis:'.$queue => 60])
        ->map(static fn (array $val) => $val[0])
        ->toArray(),

    'metrics' => [
        'trim_snapshots' => [
            'job' => 24,
            'queue' => 24,
        ],
    ],

    'memory_limit' => 128,

    'defaults' => [
        'supervisor-1' => [
            'connection' => 'redis',
            'queue' => Queue::values(),
            'balance' => 'auto',
            'autoScalingStrategy' => 'time',
            'maxProcesses' => 10,
            'minProcesses' => 2,
            'maxTime' => 0,
            'maxJobs' => 0,
            'memory' => 128,
            'tries' => 1,
            'timeout' => 10,
            'nice' => 0,
        ],
    ],

    'environments' => [
        'production' => [
            'supervisor-1' => [
                'maxProcesses' => 25,
                'tries' => 3,
                'timeout' => 60,
                'balanceMaxShift' => 1,
                'balanceCooldown' => 3,
            ],
        ],

        'local' => [
            'supervisor-1' => [
                'maxProcesses' => 3,
            ],
        ],
    ],
];
