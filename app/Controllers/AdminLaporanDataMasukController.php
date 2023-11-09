<?php

namespace App\Controllers;

use App\Models\DataMasukModel;

class AdminLaporanDataMasukController extends BaseController
{
    public function index()
    {
        $dataMasukModel = new DataMasukModel();
        $datamasuk = $dataMasukModel->findAll();
        return view('admin/laporan_data_masuk/index', ['datamasuk' => $datamasuk]);
    }
}