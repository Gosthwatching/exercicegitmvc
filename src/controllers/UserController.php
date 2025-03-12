<?php

namespace App\controllers;

use App\repositories\UserRepository;
use App\models\User;

class UserController {
    
    private $userRepository;
    
    public function __construct() {
        
        $this->userRepository = new UserRepository();
    }
    
    public function register(){
        $template = "register";
        require_once "src/views/layout.phtml";
    }
    
    public function submitRegister() {
        // var_dump($_POST);
        if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $user = new User($_POST['username'], $_POST['email'], $_POST['password']);
            $this->userRepository->createUser($user);
            header("Location: index.php?route=home&message=utilisateur crée avec succés.");
        }
    }
}