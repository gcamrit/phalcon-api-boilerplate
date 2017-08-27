<?php

return [
    // Database configuration
    'database' => [
        'adapter'  => 'mysql',
        'host'     => 'mysql',
        'dbname'   => 'blog',
        'port'     => 3306,
        'username' => 'root',
        'password' => 'root',
    ],

    // Application configuration
    'application' => [
        'cacheDir' => __DIR__ . '/../storage/cache/data/',
        'logsDir' => __DIR__ . '/../storage/logs/',
        'baseUri' => '/',
    ],
];
