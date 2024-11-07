<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index(): void
    {
        $userModel = new UserModel();
        $users = $userModel->getAllUsers();
        $this->view('user', ['users' => $users]);
    }

    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $userModel = new UserModel();
            $userModel->createUser($name);
            header('Location: /padrao-MVC/public/user');
            exit();
        }
    }

    public function update(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $userModel = new UserModel();
            $userModel->updateUser($id, $name);
            header('Location: /padrao-MVC/public/user');
            exit();
        }
    }

    public function delete(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $userModel = new UserModel();
            $userModel->deleteUser($id);
            header('Location: /padrao-MVC/public/user');
            exit();
        }
    }
}
