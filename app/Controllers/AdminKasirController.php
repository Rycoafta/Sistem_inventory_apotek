<?php

namespace App\Controllers;

use App\Models\KasirModel;

class AdminKasirController extends BaseController
{
    public function index()
    {
        $kasirModel = new KasirModel();
        $kasir = $KasirModel->findAll();
        
        $validationRules = [
            'total' => 'required',
            'bayar' => 'required',
            'kembali' => 'required'
        ];
    
        $validationMessages = [
            'total' => [
                'required' => 'total harus diisi.'
            ],
            'bayar' => [
                'required' => 'bayar harus diisi.'
            ],
            'kembali' => [
                'required' => 'kembali harus diisi'
            ]
        ];
    
        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
    
        $data = [
            'total' => $this->request->getPost('total'),
            'bayar' => $this->request->getPost('bayar'),
            'kembali' => $this->request->getPost('kembali'),
        ];
    
        $kasirModel = new KasirModel();
        $kasirModel->insert($data);
    
        return view('admin/kasir/index', ['kasir' => $kasir]);
    }
}
