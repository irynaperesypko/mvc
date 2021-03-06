<?php

namespace Ira\Controllers;

use Ira\View\View;

class ErrorController
{
    private $view;

    public function __construct(){
        $this->view = new View();
    }

    public function index()
    {
        $this->view->render('404');
    }
}