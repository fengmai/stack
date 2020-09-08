<?php

require_once './redisMethod.php';



$redis = RedisMethod::getInstance([
    'host' => '127.0.0.1',
    'auth' => 'ceshi123'
]);


$a =$redis->set('wenyan',99);


var_dump($a);exit;
