<?php

namespace App\Controllers;
use App\Models\FPBModel;
use App\Models\FPPModel;

class AdminDashboardController extends BaseController
{
    public function index()
    {
        $fppModel = new \App\Models\FPPModel();
        $fpbModel = new \App\Models\FPBModel();
        return view('admin/dashboard', [
            'fpp' => $fppModel->countAll(),
            'fpb' => $fpbModel->countAll(),
        ]);
    }
}
