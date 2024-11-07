<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\UserModel;
use App\Helpers\UrlHelper;

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

            $this->userModel->createUser($name);
            header('Location: ' . UrlHelper::base_url('user'));
            exit();
        }
    }

    public function update(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $name = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');

            $this->userModel->updateUser($id, $name);
            header('Location: ' . UrlHelper::base_url('user'));
            exit();
        }
    }

    public function delete(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];

            $this->userModel->deleteUser($id);
            header('Location: ' . UrlHelper::base_url('user'));
            exit();
        }
    }
}
