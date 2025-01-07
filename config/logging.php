<?php

declare(strict_types=1);

return [
    'channels' => [
        'emergency' => [
            'driver' => 'daily',
            'path' => env('EMERGENCY_LOG_PATH', storage_path('logs/emergency.log')),
        ],
    ],
];
