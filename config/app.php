<?php

use CodeLieutenant\LaravelCrypto\Enums\Encryption;

return [
    'owner' => [
        'name' => env('APP_OWNER_NAME'),
        'email' => env('APP_OWNER_EMAIL'),
        'phone' => env('APP_OWNER_PHONE'),
        'github' => env('APP_OWNER_GITHUB', 'CodeLieutenant'),
    ],

    'domain' => env('APP_DOMAIN', 'www.dusanmalusev.dev'),

    'cipher' => Encryption::SodiumXChaCha20Poly1305->value,

    'maintenance' => [
        'driver' => 'cache',
        'store' => 'redis',
    ],
];
