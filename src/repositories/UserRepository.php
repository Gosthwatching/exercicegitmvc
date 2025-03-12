<?php

namespace App\repositories;
use App\models\User;

require "src/services/database.php";

class UserRepository {
    private $db;

    public function __construct() {
        $this->db = getConnection();
    }
    
     public function createUser(User $user) {
        $stmt = $this->db->prepare("INSERT INTO user (name, email, password) VALUES (:name, :email, :password)");
        return $stmt->execute([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword()
        ]);
    }
}