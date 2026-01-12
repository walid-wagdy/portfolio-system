<?php

return [
    'services' => [
        'mailgun' => [
            'secret' => env('MAILGUN_SECRET'),
            'domain' => env('MAILGUN_DOMAIN'),
        ],
        'postmark' => [
            'token' => env('POSTMARK_TOKEN'),
        ],
    ],
];