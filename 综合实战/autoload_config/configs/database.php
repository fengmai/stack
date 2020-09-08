<?php
return [
    'MYSQL'  => [
        'Master' => [
            'host'          => '127.0.0.1',
            'port'          => 3306,
            'user'          => 'root',
            'password'      => '',
            'database'      => 'swoole',
            'timeout'       => 5,
            'charset'       => 'utf8mb4',
        ],
        'Slave' =>[
            'host'          => '127.0.0.1',
            'port'          => 3307,
            'user'          => 'root',
            'password'      => '',
            'database'      => 'easyswoole',
            'timeout'       => 5,
            'charset'       => 'utf8mb4',
        ]
    ],
    'REDIS2' =>[
        'host' => '127.0.0.1',
        'port' => '6379',
        'auth' => '',
    ],
];