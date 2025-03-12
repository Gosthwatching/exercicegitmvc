<?php

namespace App\controllers;

class HomeController {
    
    public function display(){
        $template = "home";
        require_once "src/views/layout.phtml";
    }
}