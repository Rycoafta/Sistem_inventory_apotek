<?php

namespace App\Models;

use CodeIgniter\Model;

class DataObatModel extends Model
{
    protected $table = 'data_obat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_obat', 'nama_obat', 'hb_obat', 'hj_obat', 'stok', 'jenis'];
}
