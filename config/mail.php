<?php

return [
    'mailers' => [
        'failover' => [
            'transport' => 'failover',
            'mailers' => explode(',', env('MAIL_FAILOVER_MAILERS', 'ses,smtp,log')),
        ],
    ],
];
