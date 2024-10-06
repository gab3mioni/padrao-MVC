<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->getAllUsers();
        $this->view('user', ['users' => $users]);
    }

    public function create($name)
    {
        $userModel = new UserModel();
        $userModel->createUser($name);
        header('Location: /user');
    }
}
