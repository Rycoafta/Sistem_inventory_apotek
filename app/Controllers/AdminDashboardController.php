<?php

namespace App\Controllers;

use App\Models\UsersModel;

class AdminDashboardController extends BaseController
{
    public function index()
    {
        $userModel = new UsersModel();
        $user = $userModel->findAll();
        return view('admin/dashboard', ['user' => $user]);
    }
}
