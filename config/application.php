<?php

return [
    // Database configuration
    'database' => [
        'host' => 'mysql',
        'username' => 'root',
        'password' => 'root',
        'dbname' => 'hello',
    ],

    // Application configuration
    'application' => [
        'cacheDir' => __DIR__ . '/../storage/cache/data/',
        'logsDir' => __DIR__ . '/../storage/logs/',
        'baseUri' => '/',
    ],
];
