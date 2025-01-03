<?php

return [
    'broadcasting' => [
        'echo' => [
            'broadcaster' => 'pusher',
            'key' => env('VITE_PUSHER_APP_KEY'),
            'cluster' => env('VITE_PUSHER_APP_CLUSTER'),
            'wsHost' => env('VITE_PUSHER_HOST'),
            'wsPort' => env('VITE_PUSHER_PORT'),
            'wssHost' => env('VITE_PUSHER_HOST'),
            'wssPort' => env('VITE_PUSHER_PORT'),
            'authEndpoint' => '/api/v1/broadcasting/auth',
            'forceTLS' => env('VITE_PUSHER_SCHEME') === 'https',
            'enabledTransports' => ['ws', 'wss'],
            'disableStats' => true,
            'encrypted' => env('VITE_PUSHER_SCHEME') === 'https',
        ],
    ],
];
