<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class AdminLaporanPenjualanController extends BaseController
{
    public function index()
    {
        $laporanModel = new LaporanModel();
        $laporan = $laporanModel->findAll();
        return view('admin/laporan_penjualan/index', ['laporan' => $laporan]);
    }
}