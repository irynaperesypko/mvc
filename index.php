<?php

use Ira\Controllers\AboutController;

require_once 'vendor/autoload.php';


$str = explode('/', $_SERVER['PATH_INFO']);
$controller = ucfirst($str[1]) . 'Controller';
$method = $str[2] ?? 'index';
$method =  'index';
$obj = new $controller;
var_dump($obj);


echo $obj->$method();