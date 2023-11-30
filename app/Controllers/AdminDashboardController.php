<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\DataObatModel;
use App\Models\DataMasukModel;
use App\Models\LaporanModel;

class AdminDashboardController extends BaseController
{
    public function index()
    {
        $userModel = new UsersModel();
        $user = $userModel->findAll();

        $dataobatModel = new DataObatModel();

        $datamasukModel = new DataMasukModel();
        $masuktoday = $datamasukModel->where('tanggal', date('Y-m-d'))->countAllResults();

        $laporanModel = new LaporanModel();
        $laporantoday = $laporanModel->where('tanggal', date('Y-m-d'))->countAllResults();

        $labatoday = $laporanModel->selectSum('harga')->where('tanggal', date('Y-m-d'))->get()->getRow()->harga;

        return view('admin/dashboard', [
            'user' => $user,
            'dataobat' => $dataobatModel->countAll(),
            'datamasuk' => $masuktoday,
            'laporan' => $laporantoday,
            'laba' => $labatoday
        ]);
    }
}
