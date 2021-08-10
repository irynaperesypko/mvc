<?php

use Ira\Controllers\AboutController;

require_once 'vendor/autoload.php';


$controller=explode('/',$_SERVER['PATH_INFO']);
var_dump($controller);
$obj=new AboutController();
echo $obj->index();