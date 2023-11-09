<?php

namespace App\Controllers;

use App\Models\DataObatModel;

class AdminDataObatController extends BaseController
{
    public function index()
    {
        $dataObatModel = new DataObatModel();
        $dataobat = $dataObatModel->findAll();
        
        return view('admin/data_obat/index', ['dataobat' => $dataobat]);
    }

    public function create()
    {
        return view('admin/data_obat/create');
    }

    public function store()
    {
    $validationRules = [
        'kode_obat' => 'required',
        'nama_obat' => 'required',
        'hb_obat' => 'required',
        'hj_obat' => 'required',
        'jenis' => 'required',
    ];

    $validationMessages = [
        'kode_obat' => [
            'required' => 'kode obat harus diisi.'
        ],
        'nama_obat' => [
            'required' => 'nama obat harus diisi.'
        ],
        'hb_obat' => [
            'required' => 'harga beli harus diisi'
        ],
        'hj_obat' => [
            'required' => 'harga jual harus diisi'
        ],
        'jenis' => [
            'required' => 'jenis harus diisi'
        ],
    ];

    if (!$this->validate($validationRules, $validationMessages)) {
        return redirect()->back()->withInput()->with('validation', $this->validator);
    }

    $data = [
        'kode_obat' => $this->request->getPost('kode_obat'),
        'nama_obat' => $this->request->getPost('nama_obat'),
        'hb_obat' => $this->request->getPost('hb_obat'),
        'hj_obat' => $this->request->getPost('hj_obat'),
        'jenis' => $this->request->getPost('jenis'),
    ];

    $dataObatModel = new DataObatModel();
    $dataObatModel->insert($data);

    return redirect()->to('/data_obat');
    }

    public function show($id)
    {
        $dataObatModel = new DataObatModel();
        $dataObat = $dataObatModel->find($id);

        if (!$dataObat) {
            return redirect()->back()->with('error', 'data obat tidak ditemukan.');
        }

        return view('admin/data_obat/show', compact('dataObat'));
    }

    public function edit($id)
    {
        $dataObatModel = new DataObatModel();
        $dataObat = $dataObatModel->find($id);

        if (!$dataObat) {
            return redirect()->back()->with('error', 'data obat tidak ditemukan.');
        }

        return view('admin/data_obat/edit', compact('dataObat'));
    }

    public function update($id)
    {
        $validationRules = [
            'kode_obat' => 'required',
            'nama_obat' => 'required',
            'hb_obat' => 'required',
            'hj_obat' => 'required',
            'jenis' => 'required',
        ];

        $validationMessages = [
            'kode_obat' => [
                'required' => 'kode obat harus diisi.'
            ],
            'nama_obat' => [
                'required' => 'nama obat harus diisi.'
            ],
            'hb_obat' => [
                'required' => 'harga beli harus diisi'
            ],
            'hj_obat' => [
                'required' => 'harga jual harus diisi'
            ],
            'jenis' => [
                'required' => 'jenis harus diisi'
            ],
        ];

        $data = [
            'kode_obat' => $this->request->getPost('kode_obat'),
            'nama_obat' => $this->request->getPost('nama_obat'),
            'hb_obat' => $this->request->getPost('hb_obat'),
            'hj_obat' => $this->request->getPost('hj_obat'),
            'jenis' => $this->request->getPost('jenis'),
        ];

        $dataObatModel = new DataObatModel();
        $dataObat = $dataObatModel->find($id);

        if (!$dataObat) {
            return redirect()->back()->with('error', 'data obat tidak ditemukan.');
        }

        $validation = \Config\Services::validation();
        $validation->setRules($validationRules, $validationMessages);

        if ($validation->run($data) == false) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $dataObatModel->update($id, $data);

        return redirect()->to('/data_obat')->with('success', 'data obat berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $dataObatModel = new DataObatModel();
        $dataObatModel->delete($id);

        return redirect()->to('/data_obat');
    }
}
