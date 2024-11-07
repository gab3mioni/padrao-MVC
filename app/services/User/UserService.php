<?php

namespace App\Services\User;

use App\Models\UserModel;

class UserService
{
    private $userModel;
    private $userValidator;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->userValidator = new UserValidator();
    }

    public function createUser(string $name): bool
    {
        if(!$this->userValidator->validateName($name)) {
            throw new \Exception("O nome deve ter pelo menos três caracteres.");
        }


        if($this->userValidator->verifyDuplicateName($name)) {
            throw new \Exception("Já existe um usuário com esse nome.");
        }

        return $this->userModel->createUser($name);
    }

    public function updateUser(int $id, string $name): bool
    {
        if(!$this->userValidator->validateName($name)) {
            throw new \Exception("O nome deve ter pelo menos três caracteres.");
        }

        if($this->userValidator->verifyDuplicateName($name)) {
            throw new \Exception("Já existe um usuário com esse nome.");
        }

        return $this->userModel->updateUser($id, $name);
    }

    public function deleteUser(int $id): bool
    {
        return $this->userModel->deleteUser($id);
    }

    public function getAllUsers(): array
    {
        return $this->userModel->getAllUsers();
    }
}