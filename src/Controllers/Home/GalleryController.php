<?php

namespace Ira\Controllers\Home;

use Ira\Models\Gallery;
use Ira\View\View;

class GalleryController
{
    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new View();
        $this->model = new Gallery();
    }

    public function index()
    {
        $data = $this->model->getItemFromArray('one');
        $this->view->render('gallery', ['data' => $data]);
    }

}