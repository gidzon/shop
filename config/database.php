<?php

return [
    'driver'    => env('DATABASE_DRIVER', 'mysql'),
    'host'      => env('DATABASE_HOST', '127.0.0.1'),
    'port'      => env('DATABASE_PORT', 3306),
    'username'  => env('DATABASE_USER', 'user'),
    'password'  => env('DATABASE_PASS', 'pass'),
    'database'  => env('DATABASE_NAME', 'name'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
];
