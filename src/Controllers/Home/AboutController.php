<?php

namespace Ira\Controllers\Home;

use Ira\View\View;

class AboutController
{
    private $view;

    public function __construct(){
        $this->view = new View();
    }

    public function index()
    {
        $this->view->render('about');
    }

}