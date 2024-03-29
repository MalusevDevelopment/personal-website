<?php

return [
    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'visibility' => 'private',
            'throw' => true,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => true,
        ],

        'profile-photos' => [
            'driver' => 's3',
            'key' => env('AWS_PROFILE_PHOTOS_ACCESS_KEY_ID'),
            'secret' => env('AWS_PROFILE_PHOTOS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_PROFILE_PHOTOS_DEFAULT_REGION'),
            'bucket' => env('AWS_PROFILE_PHOTOS_BUCKET'),
            'use_ssl' => env('AWS_PROFILE_PHOTOS_USE_SSL', false),
            'url' => env('AWS_PROFILE_PHOTOS_URL'),
            'endpoint' => env('AWS_PROFILE_PHOTOS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_PROFILE_PHOTOS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => true,
        ],
    ],

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],
];
