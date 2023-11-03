<?php

namespace App\Controllers;

use App\Models\DataMasukModel;

class AdminDataMasukController extends BaseController
{
    public function index()
    {
        $dataMasukModel = new DataMasukModel();
        $datamasuk = $dataMasukModel->findAll();
        return view('admin/data_masuk/index', ['datamasuk' => $datamasuk]);
    }

    public function create()
    {
        return view('admin/data_masuk/create');
    }

    public function store()
    {
        $validationRules = [
            'kode_transaksi' => 'required',
            'tanggal' => 'required',
            'obat' => 'required',
            'jlh_stok' => 'required',
            'jenis' => 'required',
        ];

        $validationMessages = [
            'kode_transaksi' => [
                'required' => 'Kode Transaksi harus diisi.',
            ],
            'tanggal' => [
                'required' => 'Tanggal harus diisi.',
            ],
            'obat' => [
                'required' => 'Nama Obat harus diisi.',
            ],
            'jlh_stok' => [
                'required' => 'Jumlah Stok harus diisi.',
            ],
            'jenis' => [
                'required' => 'Jenis harus diisi.',
            ]
        ];
        
        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'kode_transaksi' => $this->request->getVar('kode_transaksi'),
            'tanggal' => $this->request->getVar('tanggal'),
            'obat' => $this->request->getVar('obat'),
            'jlh_stok' => $this->request->getVar('jlh_stok'),
            'jenis' => $this->request->getVar('jenis'),
            'created_at' => date('Y-m-d H:i:s')
        ];
        
        $dataMasukModel = new DataMasukModel();
        $dataMasukModel->insert($data);

        return redirect()->to('/data_masuk');
    }

    public function show($id)
    {
        $dataMasukModel = new DataMasukModel();
        $datamasuk = $dataMasukModel->find($id);

        if (!$datamasuk) {
            return redirect()->back()->with('error', 'Data Masuk not found.');
        }

        return view('admin/data_masuk/show', compact('datamasuk'));
    }

    public function edit($id)
    {
        $dataMasukModel = new DataMasukModel();
        $datamasuk = $dataMasukModel->find($id);

        if (!$datamasuk) {
            return redirect()->back()->with('error', 'Data Masuk not found.');
        }

        return view('admin/data_masuk/edit', compact('datamasuk'));
    }

    public function update($id)
    {
        $validationRules = [
            'kode_transaksi' => "required",
            'tanggal' => 'required',
            'obat' => 'required',
            'jlh_stok' => 'required',
            'jenis' => 'required',
        ];

        $validationMessages = [
            'kode_transaksi' => [
                'required' => 'kode transaksi harus diisi.',
            ],
            'tanggal' => [
                'required' => 'tanggal harus diisi.',
            ],
            'obat' => [
                'required' => 'Nama obat harus diisi.',
            ],
            'jlh_stok' => [
                'required' => 'jumlah stok harus diisi.',
            ],
            'jenis' => [
                'required' => 'jenis harus diisi.',
            ]
        ];

        $validation = \Config\Services::validation();
        $validation->setRules($validationRules, $validationMessages);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $data = [
            'kode_transaksi' => $this->request->getPost('kode_transaksi'),
            'tanggal' => $this->request->getPost('tanggal'),
            'obat' => $this->request->getPost('obat'),
            'jlh_stok' => $this->request->getPost('jlh_stok'),
            'jenis' => $this->request->getPost('jenis'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $dataMasukModel = new DataMasukModel();
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
