<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\UserModel;

class UserController extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index(): void
    {
        $users = $this->userModel->getAllUsers();
        $this->view('user', ['users' => $users]);
    }

    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
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
            $name = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
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
