<?php

namespace Ira\Controllers\Admin;

use Ira\View\View;

class AdminController
{
    private $view;

    public function __construct(){
        $this->view = new View();
    }

    public function index()
    {
        $this->view->render('admin');
    }
}