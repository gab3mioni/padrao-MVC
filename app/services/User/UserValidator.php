<?php

namespace App\Services\User;

use App\Models\UserModel;

class UserValidator
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function validateName( string $name): bool
    {
        return strlen($name) >= 3;
    }

    public function verifyDuplicateName(string $name): bool
    {
        $existingUser = $this->userModel->findUserByName($name);
        return $existingUser !== null;
    }
}