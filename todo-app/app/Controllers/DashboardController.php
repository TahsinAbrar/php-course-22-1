<?php

namespace App\Controllers;

use App\Helpers\ResponseHelper;

class DashboardController
{
    public function index()
    {
        return ResponseHelper::renderView('dashboard', []);
    }
}