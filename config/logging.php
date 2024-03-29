<?php

return [
    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'single'),
        'trace' => true,
    ],

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['daily', 'emergency'],
            'ignore_exceptions' => false,
        ],

        'emergency' => [
            'driver' => 'daily',
            'path' => env('EMERGENCY_LOG_PATH', storage_path('logs/emergency.log')),
            'days' => 14,
            'level' => 'emergency',
        ],
    ],

];
