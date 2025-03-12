<?php

declare(strict_types=1);

// namespace App\services;


class Router
{
    private $controller;

    public function __construct($page)
    {
        $this->controller =  AVAILABLE_ROUTES[$page];
    }

 
    public function getController(): Object
    {
        $instance = "App\\controllers\\" . $this->controller;
        var_dump($instance);
        return new $instance();
    }
}
