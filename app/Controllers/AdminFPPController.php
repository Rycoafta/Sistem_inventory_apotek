<?php

namespace App\Controllers;

use App\Models\FPPModel;

class AdminFPPController extends BaseController
{
    public function index()
    {
        $fppModel = new FPPModel();
        $fpps = $fppModel->findAll();
        return view('admin/fpp/index', ['fpps' => $fpps]);
    }

    public function create()
    {
        return view('admin/fpp/create');
    }

    public function store()
{
    $validationRules = [
        'tanggal' => 'required',
        'jenis_kebutuhan' => 'required',
        'nama_pelanggan' => 'required',
        'lokasi_penempatan' => 'required',
        'ref' => 'required',
        'ref_fpb' => 'required',
        'keterangan' => 'required',
        'nama_barang' => 'required',
        'id_barang' => 'required',
        'tipe' => 'required',
        'harga_satuan' => 'required',
        'qty' => 'required',
        'jumlah' => 'required',
        'vendor' => 'required'
    ];

    $validationMessages = [
        'tanggal' => [
            'required' => 'tanggal harus diisi.'
        ],
        'jenis_kebutuhan' => [
            'required' => 'jenis kebutuhan harus diisi.'
        ],
        'nama_pelangggan' => [
            'required' => 'nama pelanggan harus diisi.'
        ],
        'lokasi_penempatan' => [
            'required' => 'lokasi penempatan harus diisi.'
        ],
        'ref' => [
            'required' => 'Nomor harus diisi.'
        ],
        'ref_fpb' => [
            'required' => 'ID FPB harus diisi.'
        ],
        'keterangan' => [
            'required' => 'keterangan harus diisi.'
        ],
        'nama_barang' => [
            'required' => 'nama/jenis harus diisi.'
        ],
        'id_barang' => [
            'required' => 'id barang harus diisi.'
        ],
        'tipe' => [
            'required' => 'tipe harus diisi.'
        ],
        'harga_satuan' => [
            'required' => 'harga satuan terendah harus diisi.'
        ],
        'qty' => [
            'required' => 'kuantitas harus diisi.'
        ],
        'jumlah' => [
            'required' => 'jumlah Harga harus diisi.'
        ],
        'vendor' => [
            'required' => 'vendor/supplier harus diisi.'
        ],
    ];

    if (!$this->validate($validationRules, $validationMessages)) {
        return redirect()->back()->withInput()->with('validation', $this->validator);
    }

    $data = [
        'tanggal' => $this->request->getVar('tanggal'),
        'jenis_kebutuhan' => $this->request->getVar('jenis_kebutuhan'),
        'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
        'lokasi_penempatan' => $this->request->getVar('lokasi_penempatan'),
        'ref' => $this->request->getVar('ref'),
        'ref_fpb' => $this->request->getVar('ref_fpb'),
        'keterangan' => $this->request->getVar('keterangan'),
        'nama_barang' => $this->request->getVar('nama_barang'),
        'id_barang' => $this->request->getVar('id_barang'),
        'tipe' => $this->request->getVar('tipe'),
        'harga_satuan' => $this->request->getVar('harga_satuan'),
        'qty' => $this->request->getVar('qty'),
        'jumlah' => $this->request->getVar('jumlah'),
        'vendor' => $this->request->getVar('vendor'),
        'status_fpp' => $sql="Pending"
    ];
    
    
    $fppModel = new FPPModel();
    $fppModel->insert($data);

    return redirect()->to('/fpp');
}

    public function show($id)
    {
        $fppModel = new FPPModel();
        $fpp = $fppModel->find($id);

        if (!$fpp) {
            return redirect()->back()->with('error', 'fpp not found.');
        }

        return view('admin/fpp/show', compact('fpp'));
    }

    public function edit($id)
    {
        $fppModel = new FPPModel();
        $fpp = $fppModel->find($id);

        if (!$fpp) {
            return redirect()->back()->with('error', 'fpp not found.');
        }

        return view('admin/fpp/edit', compact('fpp'));
    }

    public function update($id)
    {
        $validationRules = [
            'id' => "required|is_unique[fpp.id,id,$id]",
            'tanggal' => 'required',
            'jenis_kebutuhan' => 'required',
            'nama_pelanggan' => 'required',
            'lokasi_penempatan' => 'required',
            'ref' => 'required',
            'ref_fpb' => 'required',
            'keterangan' => 'required',
            'nama_barang' => 'required',
            'id_barang' => 'required',
            'tipe' => 'required',
            'harga_satuan' => 'required',
            'qty' => 'required',
            'jumlah' => 'required',
            'vendor' => 'required'
        ];

        $validationMessages = [
            'id' => [
                'required' => 'id harus diisi.',
                'is_unique' => 'id sudah terdaftar.'
            ],
            'tanggal' => [
                'required' => 'tanggal harus diisi.'
            ],
            'jenis_kebutuhan' => [
                'required' => 'jenis kebutuhan harus diisi.'
            ],
            'nama_pelangggan' => [
                'required' => 'nama pelanggan harus diisi.'
            ],
            'lokasi_penempatan' => [
                'required' => 'lokasi penempatan harus diisi.'
            ],
            'ref' => [
                'required' => 'Nomor harus diisi.'
            ],
            'ref_fpb' => [
                'required' => 'ID FPB harus diisi.'
            ],
            'keterangan' => [
                'required' => 'keterangan harus diisi.'
            ],
            'nama_barang' => [
                'required' => 'nama/jenis harus diisi.'
            ],
            'id_barang' => [
                'required' => 'id barang harus diisi.'
            ],
            'tipe' => [
                'required' => 'tipe harus diisi.'
            ],
            'harga_satuan' => [
                'required' => 'harga satuan terendah harus diisi.'
            ],
            'qty' => [
                'required' => 'kuantitas harus diisi.'
            ],
            'jumlah' => [
                'required' => 'jumlah Harga harus diisi.'
            ],
            'vendor' => [
                'required' => 'vendor/supplier harus diisi.'
            ],
        ];

        $data = [
            'id' => $this->request->getPost('id'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jenis_kebutuhan' => $this->request->getPost('jenis_kebutuhan'),
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'lokasi_penempatan' => $this->request->getPost('lokasi_penempatan'),
            'ref' => $this->request->getVar('ref'),
            'ref_fpb' => $this->request->getVar('ref_fpb'),
            'keterangan' => $this->request->getVar('keterangan'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'id_barang' => $this->request->getVar('id_barang'),
            'tipe' => $this->request->getVar('tipe'),
            'harga_satuan' => $this->request->getVar('harga_satuan'),
            'qty' => $this->request->getVar('qty'),
            'jumlah' => $this->request->getVar('jumlah'),
            'vendor' => $this->request->getVar('vendor'),
            'status_fpp' => $sql="Pending",
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $sql="UPDATE fpb SET status_fpp='Pending'";
        $fppModel = new FPPModel();
        $fpp = $fppModel->find($id);

        if (!$fpp) {
            return redirect()->back()->with('error', 'fpp not found.');
        }

        $validation = \Config\Services::validation();
        $validation->setRules($validationRules, $validationMessages);

        if ($validation->run($data) == false) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $fppModel->update($id, $data);

        return redirect()->to('/fpp')->with('success', 'fpp updated successfully.');
    }


    public function destroy($id)
    {
        $fppModel = new FPPModel();
        $fppModel->delete($id);

        return redirect()->to('/fpp');
    }
}
