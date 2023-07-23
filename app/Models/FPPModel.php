<?php

namespace App\Models;

use CodeIgniter\Model;

class FPPModel extends Model
{
    protected $table = 'fpp';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tanggal', 'jenis_kebutuhan', 'nama_pelanggan', 'lokasi_penempatan', 'keterangan'];
}
