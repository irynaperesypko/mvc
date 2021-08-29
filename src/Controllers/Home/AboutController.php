<?php

namespace Ira\Controllers\Home;

use Ira\Models\About;
use Ira\View\View;

class AboutController
{
    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new View();
        $this->model = new About();
    }

    public function index()
    {
        $data = $this->model->getAllArray();
        $this->view->render('about', ['data' => $data]);
    }

    public function getAll()
    {
        $data = $this->model->getAll();
        $this->view->render('aboutList', ['data' => $data]);

    }
}