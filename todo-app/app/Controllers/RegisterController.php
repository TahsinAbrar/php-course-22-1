<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;
use App\Models\User;

class RegisterController
{
    public function registerView()
    {
        return ResponseHelper::renderView('auth/register', []);
    }

    public function register()
    {
        $user = new User();

        $user->save($_POST);

        $_SESSION['is_user_logged_in'] = true;
        $_SESSION['logged_in_user_name'] = htmlspecialchars($_POST['name']);

        header('Location: /dashboard');
        // return ResponseHelper::renderView('auth/register', []);
    }
}