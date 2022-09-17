<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;
use App\Models\User;

class AuthController
{
    public function loginView()
    {
        // This is main part of application

        // User already registered or NOT.

        // Skip understanding view rendering part
        return ResponseHelper::renderView('auth/login', []);
    }

    public function login()
    {
        // var_dump($_POST);exit;
        $userObj = new User();
        $user = $userObj->auth($_POST['email'], $_POST['password']);
        $_SESSION['is_user_logged_in'] = true;
        $_SESSION['logged_in_user_name'] = htmlspecialchars($user['name']);

        header('Location: /dashboard');
        exit;
    }

    public function logout()
    {
        session_destroy();
        header('Location: /login');
        return "logout process is starting..";
    }
}