<?php

namespace App\Models;

use CodeIgniter\Model;

class FPBModel extends Model
{
    protected $table = 'fpb';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tanggal', 'ref', 'nama', 'divisi', 'lokasi_penempatan', 'kebutuhan_projek', 'keterangan', 'namajenis', 'idbarang', 'tipe', 'qty', 'note'];

    public function user()
    {
        return $this->hasMany('App\Models\UserModel', 'nama', 'id');
    }

}
