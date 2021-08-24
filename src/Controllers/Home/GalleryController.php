<?php

namespace Ira\Controllers\Home;

use Ira\View\View;

class GalleryController
{
    private $view;

    public function __construct(){
        $this->view = new View();
    }

    public function index()
    {
        $this->view->render('gallery');
    }

}