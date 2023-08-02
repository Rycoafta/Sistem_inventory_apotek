<?php

namespace App\Models;

use CodeIgniter\Model;

class FPBModel extends Model
{
    protected $table = 'fpb';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tanggal', 'ref', 'nama_peminjam', 'divisi', 'lokasi_penempatan', 'kebutuhan_projek', 'keterangan', 'nama_barang', 'tipe', 'qty', 'note', 'status_fpb'];

    public function user()
    {
        return $this->hasMany('App\Models\UserModel', 'nama', 'id');
    }

}
