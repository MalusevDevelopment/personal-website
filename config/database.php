<?php

return [
    'redis' => [
        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', 'website:'),
            'serializer' => Redis::SERIALIZER_IGBINARY,
            'compression' => Redis::COMPRESSION_ZSTD,
        ],

        'default' => [
            'name' => 'website-default',
            'url' => env('REDIS_URL', 'tcp://127.0.0.1:6379?database=0'),
            'persistent' => true,
        ],

        'cache' => [
            'name' => 'website-cache',
            'url' => env('REDIS_CACHE_URL', 'tcp://127.0.0.1:6379?database=1'),
            'prefix' => 'cache:',
            'persistent' => true,
        ],

        'queue' => [
            'name' => 'website-queue',
            'url' => env('REDIS_QUEUE_URL', 'tcp://127.0.0.1:6379?database=2'),
            'prefix' => 'queue:',
            'persistent' => true,
        ],

        'horizon' => [
            'name' => 'website-horizon',
            'url' => env('REDIS_HORIZON_URL', 'tcp://127.0.0.1:6379?database=3'),
            'prefix' => 'horizon:',
            'persistent' => true,
        ],

        'locks' => [
            'name' => 'website-locks',
            'url' => env('REDIS_LOCKS_URL', 'tcp://127.0.0.1:6379?database=4'),
            'prefix' => 'locks:',
            'persistent' => true,
        ],

        'sessions' => [
            'name' => 'website-sessions',
            'url' => env('REDIS_SESSIONS_URL', 'tcp://127.0.0.1:6379?database=5'),
            'prefix' => 'sessions:',
            'persistent' => true,
        ],

        'pulse' => [
            'name' => 'website-pulse',
            'url' => env('REDIS_PULSE_URL', 'tcp://127.0.0.1:6379?database=6'),
            'prefix' => 'horizon:',
            'persistent' => true,
        ],

        'broadcasting' => [
            'name' => 'website-broadcasting',
            'url' => env('REDIS_BROADCASTING_URL', 'tcp://127.0.0.1:6379?database=7'),
            'prefix' => 'broadcasting:',
            'persistent' => true,
        ],
    ],

];
