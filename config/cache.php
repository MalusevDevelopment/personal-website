<?php

return [
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
    ],
];
