<?php

namespace App\Controllers;

use App\Models\AlatModel;

class AdminAlatController extends BaseController
{
    public function index()
    {
        $alatModel = new AlatModel();
        $alats = $alatModel->findAll();
        return view('admin/alat/index', ['alats' => $alats]);
    }

    public function create()
    {
        return view('admin/alat/create');
    }

    public function store()
{
    $validationRules = [
        'kode_alat' => 'required',
        'nama_alat' => 'required',
        'stok' => 'required'
    ];

    $validationMessages = [
        'kode_alat' => [
            'required' => 'kode barang harus diisi.'
        ],
        'nama_alat' => [
            'required' => 'nama barang harus diisi.'
        ],
        'stok' => [
            'required' => 'Stok harus diisi'
        ]
    ];

    if (!$this->validate($validationRules, $validationMessages)) {
        return redirect()->back()->withInput()->with('validation', $this->validator);
    }

    $data = [
        'kode_alat' => $this->request->getPost('kode_alat'),
        'nama_alat' => $this->request->getPost('nama_alat'),
        'stok' => $this->request->getPost('stok')
    ];

    $alatModel = new AlatModel();
    $alatModel->insert($data);

    return redirect()->to('/alat');
}

    public function show($id)
    {
        $alatModel = new AlatModel();
        $alat = $alatModel->find($id);

        if (!$alat) {
            return redirect()->back()->with('error', 'alat not found.');
        }

        return view('admin/alat/show', compact('alat'));
    }

    public function edit($id)
    {
        $alatModel = new AlatModel();
        $alat = $alatModel->find($id);

        if (!$alat) {
            return redirect()->back()->with('error', 'alat not found.');
        }

        return view('admin/alat/edit', compact('alat'));
    }

    public function update($id)
    {
        $validationRules = [
            'kode_alat' => 'required',
            'nama_alat' => 'required',
            'stok' => 'required'
        ];

        $validationMessages = [
            'kode_alat' => [
                'required' => 'kode alat harus diisi.'
            ],
            'nama_alat' => [
                'required' => 'nama barang harus diisi.'
            ],
            'stok' => [
                'required' => 'Stok harus diisi'
            ]
        ];

        $data = [
            'kode_alat' => $this->request->getPost('kode_alat'),
            'nama_alat' => $this->request->getPost('nama_alat'),
            'stok' => $this->request->getPost('stok')
        ];

        $alatModel = new AlatModel();
        $alat = $alatModel->find($id);

        if (!$alat) {
            return redirect()->back()->with('error', 'alat not found.');
        }

        $validation = \Config\Services::validation();
        $validation->setRules($validationRules, $validationMessages);

        if ($validation->run($data) == false) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $alatModel->update($id, $data);

        return redirect()->to('/alat')->with('success', 'alat updated successfully.');
    }


    public function destroy($id)
    {
        $alatModel = new AlatModel();
        $alatModel->delete($id);

        return redirect()->to('/alat');
    }
}
