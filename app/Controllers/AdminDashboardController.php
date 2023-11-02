<?php

namespace App\Controllers;

class AdminDashboardController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard', [
        ]);
    }
}
