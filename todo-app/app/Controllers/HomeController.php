<?php

namespace App\Controllers;

use App\Helpers\Database;

class HomeController
{
    public function index()
    {
        $database = Database::getInstance();
        return "hello todo app ... is it really working??";
    }
}
