<?php

namespace App\Models;

use PDO;

class UserModel extends BaseModel
{
    public function getAllUsers(): array
    {
        $query = "SELECT * FROM users";
        return $this->fetchAllValues($query);
    }

    public function findUserByName(string $name): bool
    {
        $query = "SELECT * FROM users WHERE name = :name";
        return $this->fetchSingleValue($query, [':name' => $name]);
    }

    public function createUser(string $name): bool
    {
        $query = "INSERT INTO users (name) VALUES (:name)";
        return $this->executeQuery($query, [':name' => $name]);
    }

    public function updateUser(int $id, string $name): bool
    {
        $query = "UPDATE users SET name = :name WHERE id = :id";
        return $this->executeQuery($query, [
            'id' => $id,
            ':name' => $name
        ]);
    }

    public function deleteUser(int $id): bool
    {
        $query = "DELETE FROM users WHERE id = :id";
        return $this->executeQuery($query, ['id' => $id]);
    }
}
