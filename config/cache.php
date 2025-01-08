<?php

declare(strict_types=1);

return [
    'default' => env('CACHE_STORE', 'file'),

    'stores' => [
        'redis' => [
            'driver' => 'redis',
            'connection' => 'cache',
            'lock_connection' => 'locks',
        ],

        'pulse' => [
            'driver' => 'redis',
            'connection' => 'pulse',
            'lock_connection' => 'locks',
        ],

        'sessions' => [
            'driver' => 'redis',
            'connection' => 'sessions',
            'lock_connection' => 'locks',
        ],

        'healthchecks' => [
            'driver' => 'redis',
            'connection' => 'healthchecks',
            'lock_connection' => 'locks',
        ],
    ],
];
