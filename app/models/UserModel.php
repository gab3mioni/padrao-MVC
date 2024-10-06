<?php

namespace App\Models;

use PDO;

class UserModel
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAllUsers()
    {
        $stmt = $this->pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
