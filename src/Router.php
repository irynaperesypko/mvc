<?php

namespace Ira;

class Router
{
    private $controller = 'ErrorController';
    private $action= 'index';

    public function __construct(string $url)
    {
        $routes= explode('/', $url);
        // получаем имя контроллера
        if (!empty($routes[1]) )
        {
            $this->controller = ucfirst($routes[1])."Controller";
        }
        // получаем имя экшена
        if (!empty($routes[2]) ) {
            $this->action = $routes[2];
        }
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        return 'Ira\\Controllers\\'.$this->controller;
    }

    /**
     * @return mixed|string
     */
    public function getAction()
    {
        return $this->action;
    }



}