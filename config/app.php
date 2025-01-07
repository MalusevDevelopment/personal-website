<?php

declare(strict_types=1);

use CodeLieutenant\LaravelCrypto\Enums\Encryption;

return [
    'owner' => [
        'name' => env('APP_OWNER_NAME'),
        'email' => env('APP_OWNER_EMAIL'),
        'phone' => env('APP_OWNER_PHONE'),
        'github' => env('APP_OWNER_GITHUB', 'CodeLieutenant'),

        'links' => [
            [
                'href' => 'mailto:dusan@dusanmalusev.dev',
                'dataType' => 'email',
                'icon' => 'email',
            ],
            [
                'href' => 'https://github.com/'.env('APP_OWNER_GITHUB', 'CodeLieutenant'),
                'dataType' => 'github',
                'icon' => 'github',
            ],
            [
                'href' => 'https://www.linkedin.com/in/malusevd998',
                'dataType' => 'linkedin',
                'icon' => 'linkedin',
            ],
            [
                'href' => 'https://dev.to/malusev998',
                'dataType' => 'dev.to',
                'icon' => 'dev-to',
            ],
            [
                'href' => 'https://www.reddit.com/user/Back_Professional',
                'dataType' => 'reddit',
                'icon' => 'reddit',
            ],
            [
                'href' => 'https://stackoverflow.com/users/8411483/dusan-malusev',
                'dataType' => 'stackoverflow',
                'icon' => 'stack-overflow',
            ],
            [
                'href' => assert('resume.pdf'),
                'dataType' => 'resume',
                'icon' => 'resume',
            ],
        ],
    ],
    'domain' => env('APP_DOMAIN', 'www.dusanmalusev.dev'),
    'cipher' => Encryption::SodiumXChaCha20Poly1305->value,
];
