<?php

namespace App\Controllers;

use App\Models\KasirModel;
use App\Models\DataObatModel;
use App\Models\LaporanModel;


class AdminKasirController extends BaseController
{
    public function index()
    {
        $dataobatModel = new DataObatModel();
        $dataobat = $dataobatModel->findAll();

        $kasirModel = new KasirModel();
        $kasir = $kasirModel->findAll();

        $data = [
            'bayar' => $this->request->getVar('bayar'),
        ];
        
        $grandtotal = 0;
        foreach ($kasir as $jumlah) {
            $harga = $jumlah['price'];

            $grandtotal = $grandtotal + $harga;
        }

        $total = [
            'grandtotal' => $grandtotal
        ];

        $hitung = [
            'bayar' => $this->request->getVar('bayar'),
            'kembali' => $data['bayar'] - $total['grandtotal'],
        ];

        return view('admin/kasir/index', [
            'dataobat' => $dataobat,
            'kasir' => $kasir,
            'total' => $total,
            'hitung' => $hitung
        ]);

    }

    public function tambah()
    {
        $dataobatModel = new DataObatModel();
        $dataobat = $dataobatModel->findAll();
        $kasirModel = new KasirModel();

        $validationRules = [
            'faktur' => 'required',
            'obat' => 'required',
            'qty' => 'required',
            'nama_pembeli' => 'required',
        ];

        $validationMessages = [
            'faktur' => [
                'required' => 'Obat harus diisi.',
            ],
            'obat' => [
                'required' => 'Obat harus diisi.',
            ],
            'qty' => [
                'required' => 'Qty harus diisi.',
            ],
            'nama_pembeli' => [
                'required' => 'Qty harus diisi.',
            ],
        ];
        
        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'faktur' => $this->request->getVar('faktur'),
            'obat' => $this->request->getVar('obat'),
            'qty' => $this->request->getVar('qty'),
            'nama_pembeli' => $this->request->getVar('nama_pembeli'),
        ];
        
        $obatData = null;
        foreach ($dataobat as $dataObat) {
            if ($dataObat['nama_obat'] == $data['obat']) {
                $obatData = $dataObat;
                break;
            }
        }

        if ($obatData && $obatData['stok'] >= $data['qty']) {
            $data = [
                'faktur' => $this->request->getVar('faktur'),
                'tanggal' => $this->request->getVar('tanggal'),
                'obat' => $this->request->getVar('obat'),
                'qty' => $this->request->getVar('qty'),
                'nama_pembeli' => $this->request->getVar('nama_pembeli'),
                'kode_obat' => $obatData['kode_obat'],
                'price' => $obatData['hj_obat'] * $data['qty'],
            ];

            $kasirModel->insert($data);

            return redirect()->to('/kasir');
        } else {
            return redirect()->to('/kasir')->with('error', 'Stok Obat Tidak Mencukupi!');
        }
    }

    public function store()
    {
        $kasirModel = new KasirModel();
        $kasir = $kasirModel->findAll();

        $dataobatModel = new DataObatModel();
        $dataobat = $dataobatModel->findAll();

        $salesData = [];

        foreach ($kasir as $kasirItem) {
            foreach ($dataobat as $dataobatItem) {
                if ($dataobatItem['kode_obat'] == $kasirItem['kode_obat'] && $dataobatItem['stok'] >= $kasirItem['qty']) {
                    $data = [
                        'kode_penjualan' => $kasirItem['faktur'],
                        'tanggal' => $kasirItem['tanggal'],
                        'kode_obat' => $kasirItem['kode_obat'],
                        'name_obat' => $kasirItem['obat'],
                        'qty' => $kasirItem['qty'],
                        'harga' => $kasirItem['price'],
                        'nama_pembeli' => $kasirItem['nama_pembeli'],
                    ];

                    $data_2 = [
                        'stok' => $dataobatItem['stok'] - $kasirItem['qty'],
                    ];

                    $dataobatModel->update($dataobatItem['id'], $data_2);

                    $salesData[] = $data;
                }
            }
        }

        if (!empty($salesData)) {
            $laporanModel = new LaporanModel();
            $laporanModel->insertBatch($salesData);

            $kasirModel->emptyTable();

            return redirect()->to('/kasir');
        } else {
            return redirect()->to('/kasir')->with('error', 'Stok is not enough for one or more items.');
        }
    }
    
    public function destroy($id)
    {
        $kasirModel = new KasirModel();
        $kasirModel->delete($id);

        return redirect()->to('/kasir');
    }
}
