<?php

namespace App\Controllers;

use App\Models\KasirModel;
use App\Models\DataObatModel;
use App\Models\LaporanModel;


class AdminKasirController extends BaseController
{
    public function index()
    {
        $kasirModel = new DataObatModel();
        $kasir = $kasirModel->findAll();

        // get last id kasir
        $lastKasir = $kasirModel->orderBy('id', 'DESC')->first();
        $lastId = $lastKasir['id'];
        $lastId = intval($lastId);
        $lastId += 1;
        $lastId = str_pad($lastId, 4, '0', STR_PAD_LEFT);

        return view('admin/kasir/index', ['kasir' => $kasir, 'lastId' => $lastId]);
    }

    public function store()
    {        
        $validationRules = [
            'total' => 'required',
            'bayar' => 'required',
            'kembalian' => 'required'
        ];
    
        $validationMessages = [
            'total' => [
                'required' => 'total harus diisi.'
            ],
            'bayar' => [
                'required' => 'bayar harus diisi.'
            ],
            'kembalian' => [
                'required' => 'kembali harus diisi'
            ]
        ];
    
        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
    
        $data = [
            'total' => $this->request->getPost('total'),
            'bayar' => $this->request->getPost('bayar'),
            'kembali' => $this->request->getPost('kembalian'),
        ];

        // cart is an array of objects
        $cart = $this->request->getPost('cart');
        foreach ($cart as $item) {
            $data['kode'] = $item['kode'];
            $data['jumlah'] = $item['jumlah'];
            // insert to laporan
            $laporanModel = new LaporanModel();
            $data_laporan = [
                'tanggal' => date('Y-m-d'),
                'kode_penjualan' => $this->generateCode(),
                'name_obat' => $this->getNameObat($item['kode']),
                'qty' => $item['jumlah'],
                'harga' => $item['harga'] * $item['jumlah'],
            ];
            $laporanModel->insert($data_laporan);

            // min stock
            $dataObatModel = new DataObatModel();
            $dataObat = $dataObatModel->where('kode_obat', $item['kode'])->first();
            $dataObat['stok'] -= $item['jumlah'];
            $dataObatModel->update($dataObat['id'], $dataObat);

        }
    
        $kasirModel = new KasirModel();
        $kasirModel->insert($data);
    
        return $this->response->setJSON(['status' => 'success']);
    }

    public function generateCode()
    {
        $laporanModel = new LaporanModel();
        $lastLaporan = $laporanModel->orderBy('id', 'DESC')->first();
        // format KP-YEAR-0000001
        $lastKode = $lastLaporan['kode_penjualan'];
        $lastKode = substr($lastKode, 9, 7);
        $lastKode = intval($lastKode);
        // if year is different, reset lastKode to 1
        if (date('Y') != substr($lastLaporan['kode_penjualan'], 3, 4)) {
            $lastKode = 0;
        }
        $lastKode += 1;
        $lastKode = str_pad($lastKode, 7, '0', STR_PAD_LEFT);
        $newKode = 'KP-' . date('Y') . '-' . $lastKode;
        return $newKode;
    }

    public function getNameObat($kode)
    {
        $dataObatModel = new DataObatModel();
        $dataObat = $dataObatModel->where('kode_obat', $kode)->first();
        return $dataObat['nama_obat'];
    }

}
