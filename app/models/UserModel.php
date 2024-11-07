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

    public function getAllUsers(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function createUser($name): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (name) VALUES (:name)");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    }

    public function updateUser($id, $name): void
    {
        $stmt = $this->pdo->prepare("UPDATE users SET name = :name WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    }

    public function deleteUser($id): void
    {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
