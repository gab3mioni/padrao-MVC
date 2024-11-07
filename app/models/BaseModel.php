<?php

namespace App\Models;

use PDO;

class BaseModel
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    protected function fetchSingleValue(string $query, array $params): float
    {
        $stmt = $this->pdo->prepare($query);
        foreach ($params as $key => $value) {
            $stmt->bindValue($key, $value);
        }
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    protected function fetchAllValues(string $query): array
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    protected  function executeQuery(string $query, array $params): bool
    {
        $stmt = $this->pdo->prepare($query);
        foreach($params as $key => $value) {
            $stmt->bindValue($key, $value);
        }
        return $stmt->execute();
    }
}