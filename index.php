<?php

use Ira\Router;

require_once 'vendor/autoload.php';
$url = $_SERVER['PATH_INFO'] ?? '/';
$obj = new Router($url);
$class = $obj->getController();
$action = $obj->getAction();

if (class_exists($class) && method_exists($class, $action)) {
    $obj = new $class();
    echo $obj->$action();
} else {
    echo '404';
}


