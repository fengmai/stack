<?php
/**
 * 自动加载配置
 * */

define('BASEDIE',__DIR__);

require_once  './autoload_config.php';
$config =  new config(BASEDIE.'/configs');

var_dump($config['database']);


