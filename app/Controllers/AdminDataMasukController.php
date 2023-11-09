<?php

namespace App\Controllers;

use App\Models\DataMasukModel;
use App\Models\DataObatModel;

class AdminDataMasukController extends BaseController
{
    public function index()
    {
        $dataMasukModel = new DataObatModel();
        $datamasuk = $dataMasukModel->findAll();
        return view('admin/data_masuk/index', ['datamasuk' => $datamasuk]);
    }

    public function create()
    {
        $dataMasukModel = new DataObatModel();
        $datamasuk = $dataMasukModel->findAll();
        return view('admin/data_masuk/create', ['datamasuk' => $datamasuk]);
    }

    public function store()
    {
        $validationRules = [
            'kode_transaksi' => 'required',
            'tanggal' => 'required',
            'tanggal_kadaluarsa' => 'required',
            'obat' => 'required',
            'jlh_stok' => 'required',
        ];

        $validationMessages = [
            'kode_transaksi' => [
                'required' => 'Kode Transaksi harus diisi.',
            ],
            'tanggal' => [
                'required' => 'Tanggal harus diisi.',
            ],
            'tanggal_kadaluarsa' => [
                'required' => 'Tanggal harus diisi.',
            ],
            'obat' => [
                'required' => 'Nama Obat harus diisi.',
            ],
            'jlh_stok' => [
                'required' => 'Jumlah Stok harus diisi.',
            ]
        ];
        
        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'kode_transaksi' => $this->request->getVar('kode_transaksi'),
            'tanggal' => $this->request->getVar('tanggal'),
            'tanggal_kadaluarsa' => $this->request->getVar('tanggal_kadaluarsa'),
            'obat' => $this->request->getVar('obat'),
            'jlh_stok' => $this->request->getVar('jlh_stok'),
        ];
        
        $dataMasukModel = new DataMasukModel();
        $dataMasukModel->insert($data);

        $dataObatModel = new DataObatModel();
        $dataobat = $dataObatModel->findAll();

        if (!$dataobat) {
            return redirect()->back()->with('error', 'Obat not found.');
        }

        $obatData = null;
        $masukData = null;
        foreach ($dataobat as $dataObat) {
            if ($dataObat['nama_obat'] == $data['obat']) {
                $obatData = $dataObat;
                break;
            }
        }

        if ($obatData && $data) {
            $data_2 = [
                'stok' => $obatData['stok'] + $data['jlh_stok'],
            ];

            $dataObatModel->update($obatData['id'], $data_2);

            return redirect()->to('/data_masuk')->with('success', 'Obat berhasil ditambahkan.');
        } else {
            return redirect()->back()->with('error', 'Obat not found.');
        }
    }

    public function edit($id)
    {
        $dataMasukModel = new DataObatModel();
        $datamasuk = $dataMasukModel->find($id);

        if (!$datamasuk) {
            return redirect()->back()->with('error', 'Data Masuk not found.');
        }

        return view('admin/data_masuk/edit', compact('datamasuk'));
    }

    public function update($id)
    {
        $validationRules = [
            'stok' => 'required',
        ];

        $validationMessages = [
            'stok' => [
                'required' => 'jumlah stok harus diisi.',
            ],
        ];

        $validation = \Config\Services::validation();
        $validation->setRules($validationRules, $validationMessages);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $data = [
            'stok' => $this->request->getPost('stok'),
        ];

        $dataMasukModel = new DataObatModel();
        $datamasuk = $dataMasukModel->find($id);

        if (!$datamasuk) {
            return redirect()->back()->with('error', 'data masuk not found.');
        }

        $dataMasukModel->update($id, $data);

        return redirect()->to('/data_masuk')->with('success', 'Data Masuk updated successfully.');
    }


    public function destroy($id)
    {
        $dataMasukModel = new DataMasukModel();
        $dataMasukModel->delete($id);

        return redirect()->to('/data_masuk');
    }

}
