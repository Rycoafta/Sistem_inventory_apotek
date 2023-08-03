<?php

namespace App\Controllers;

use App\Models\FPBModel;
use App\Models\AlatModel;

class AdminFPBController extends BaseController
{
    public function index()
    {
        $fpbModel = new FPBModel();
        $fpbs = $fpbModel->findAll();
        return view('admin/fpb/index', ['fpbs' => $fpbs]);
    }

    public function create()
    {
        $alatModel = new AlatModel();
        $alats = $alatModel->findAll();
        return view('admin/fpb/create', ['alats' => $alats]);
    }

    public function store()
    {
        $validationRules = [
            'id' => 'required',
            'tanggal' => 'required',
            'ref' => 'required',
            'nama_peminjam' => 'required',
            'divisi' => 'required',
            'lokasi_penempatan' => 'required',
            'kebutuhan_projek' => 'required',
            'keterangan' => 'required',
            'nama_barang' => 'required',
            'tipe' => 'required',
            'qty' => 'required',
            'note' => 'required',
        ];

        $validationMessages = [
            'id' => [
                'required' => 'id harus diisi.',
                'is_unique' => 'id sudah terdaftar.'
            ],
            'tanggal' => [
                'required' => 'Tanggal harus diisi.',
            ],
            'ref' => [
                'required' => 'Ref harus diisi.',
            ],
            'nama_peminjam' => [
                'required' => 'Nama harus diisi.',
            ],
            'divisi' => [
                'required' => 'divisi harus diisi.',
            ],
            'lokasi_penempatan' => [
                'required' => 'lokasi penempatan harus diisi.',
            ],
            'kebutuhan_projek' => [
                'required' => 'kebutuhan projek harus diisi.',
            ],
            'keterangan' => [
                'required' => 'keterangan harus diisi.',
            ],
            'nama_barang' => [
                'required' => 'keterangan harus diisi.',
            ],
            'tipe' => [
                'required' => 'keterangan harus diisi.',
            ],
            'qty' => [
                'required' => 'keterangan harus diisi.',
            ],
            'note' => [
                'required' => 'keterangan harus diisi.',
            ],
        ];
        
        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'id' => $this->request->getVar('id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'ref' => $this->request->getVar('ref'),
            'nama_peminjam' => $this->request->getVar('nama_peminjam'),
            'divisi' => $this->request->getVar('divisi'),
            'lokasi_penempatan' => $this->request->getVar('lokasi_penempatan'),
            'kebutuhan_projek' => $this->request->getVar('kebutuhan_projek'),
            'keterangan' => $this->request->getVar('keterangan'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'tipe' => $this->request->getVar('tipe'),
            'qty' => $this->request->getVar('qty'),
            'note' => $this->request->getVar('note'),
            'status_fpb' => $sql="Pending",
            'created_at' => date('Y-m-d H:i:s')
        ];
        
        $fpbModel = new FPBModel();
        $fpbModel->insert($data);

        return redirect()->to('/fpb');
    }

    public function show($id)
    {
        $fpbModel = new FPBModel();
        $fpb = $fpbModel->find($id);

        if (!$fpb) {
            return redirect()->back()->with('error', 'fpb not found.');
        }

        return view('admin/fpb/show', compact('fpb'));
    }

    public function edit($id)
    {
        $alatModel = new AlatModel();
        $alats = $alatModel->findAll();
        $fpbModel = new FPBModel();
        $fpb = $fpbModel->find($id);

        if (!$fpb) {
            return redirect()->back()->with('error', 'fpb not found.');
        }

        return view('admin/fpb/edit', compact('fpb'));
    }

    public function update($id)
    {
        $validationRules = [
            'id' => "required|is_unique[fpb.id,id,$id]",
            'tanggal' => 'required',
            'ref' => 'required',
            'nama_peminjam' => 'required',
            'divisi' => 'required',
            'lokasi_penempatan' => 'required',
            'kebutuhan_projek' => 'required',
            'keterangan' => 'required',
            'nama_barang' => 'required',
            'tipe' => 'required',
            'qty' => 'required',
            'note' => 'required',
        ];

        $validationMessages = [
            'id' => [
                'required' => 'id harus diisi.',
                'is_unique' => 'id sudah terdaftar.'
            ],
            'ref' => [
                'required' => 'Ref harus diisi.',
            ],
            'tanggal' => [
                'required' => 'tanggal harus diisi.',
            ],
            'nama_peminjam' => [
                'required' => 'Nama harus diisi.',
            ],
            'divisi' => [
                'required' => 'divisi harus diisi.',
            ],
            'lokasi_penempatan' => [
                'required' => 'lokasi penempatan harus diisi.',
            ],
            'kebutuhan_projek' => [
                'required' => 'kebutuhan projek harus diisi.',
            ],
            'keterangan' => [
                'required' => 'keterangan harus diisi.',
            ],
            'nama_barang' => [
                'required' => 'keterangan harus diisi.',
            ],
            'tipe' => [
                'required' => 'keterangan harus diisi.',
            ],
            'qty' => [
                'required' => 'keterangan harus diisi.',
            ],
            'note' => [
                'required' => 'keterangan harus diisi.',
            ],
        ];

        $validation = \Config\Services::validation();
        $validation->setRules($validationRules, $validationMessages);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $data = [
            'id' => $this->request->getPost('id'),
            'tanggal' => $this->request->getPost('tanggal'),
            'ref' => $this->request->getPost('ref'),
            'nama_peminjam' => $this->request->getPost('nama_peminjam'),
            'divisi' => $this->request->getPost('divisi'),
            'lokasi_penempatan' => $this->request->getPost('lokasi_penempatan'),
            'kebutuhan_projek' => $this->request->getPost('kebutuhan_projek'),
            'keterangan' => $this->request->getPost('keterangan'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'tipe' => $this->request->getVar('tipe'),
            'qty' => $this->request->getVar('qty'),
            'note' => $this->request->getVar('note'),
            'status_fpb' => $sql="Pending",
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $fpbModel = new FPBModel();
        $fpb = $fpbModel->find($id);

        if (!$fpb) {
            return redirect()->back()->with('error', 'fpb not found.');
        }

        $fpbModel->update($id, $data);

        return redirect()->to('/fpb')->with('success', 'fpb updated successfully.');
    }


    public function destroy($id)
    {
        $fpbModel = new FPBModel();
        $fpbModel->delete($id);

        return redirect()->to('/fpb');
    }
}
