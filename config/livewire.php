<?php

return [

    'layout' => 'components.layouts.app',
    'temporary_file_upload' => [
        'disk' => 'local',
        // Example: 'local', 's3'              | Default: 'default'
        'rules' => ['required', 'file', 'max:12288'],
        // Example: ['file', 'mimes:png,jpg']  | Default: ['required', 'file', 'max:12288'] (12MB)
        'directory' => '/tmp',
        // Example: 'tmp'                      | Default: 'livewire-tmp'
        'middleware' => 'throttle:60,1',
        // Example: 'throttle:5,1'             | Default: 'throttle:60,1'
        'preview_mimes' => [   // Supported file types for temporary pre-signed file URLs...
            'png',
            'gif',
            'bmp',
            'svg',
            'wav',
            'mp4',
            'mov',
            'avi',
            'wmv',
            'mp3',
            'm4a',
            'jpg',
            'jpeg',
            'mpga',
            'webp',
            'wma',
        ],
        'max_upload_time' => 5,
        // Max duration (in minutes) before an upload is invalidated...
    ],

    'inject_assets' => false,

];
