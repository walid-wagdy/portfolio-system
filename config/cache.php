<?php

return [
    'default' => env('CACHE_DRIVER', 'file'),
    'stores' => [
        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
        ],
        'database' => [
            'driver' => 'database',
            'connection' => 'cache',
            'table' => 'cache',
        ],
        'redis' => [
            'driver' => 'redis',
            'connection' => 'cache',
        ],
        'memcached' => [
            'driver' => 'memcached',
            'servers' => [
                ['host' => env('MEMCACHED_HOST', '127.0.0.1'), 'port' => env('MEMCACHED_PORT', 11211)],
            ],
        ],
    ],
    'prefix' => env('CACHE_PREFIX', 'laravel_cache'),
];