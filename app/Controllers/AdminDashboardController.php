<?php

namespace App\Controllers;

class AdminDashboardController extends BaseController
{
    public function index()
    {
        // $fppModel = new \App\Models\FPPModel();
        // $fpbModel = new \App\Models\FPBModel();
        // $userModel = new \App\Models\UserModel();
        // $riwayatModel = new \App\Models\RiwayatModel();
        return view('admin/dashboard', [
        ]);
    }
}
