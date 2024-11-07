<?php

namespace App\Controllers;

use Core\Controller;
use App\Services\User\UserService;
use App\Helpers\UrlHelper;

class UserController extends Controller
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function index(): void
    {
        $users = $this->userService->getAllUsers();
        $this->view('user', ['users' => $users]);
    }

    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');

            try {
                $this->userService->createUser($name);
                header('Location: ' . UrlHelper::base_url('user'));
                exit();
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        }
    }

    public function update(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $name = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');

            try {
                $this->userService->updateUser($id, $name);
                header('Location: ' . UrlHelper::base_url('user'));
                exit();
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        }
    }

    public function delete(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];

            try {
                $this->userService->deleteUser($id);
                header('Location: ' . UrlHelper::base_url('user'));
                exit();
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        }
    }
}
