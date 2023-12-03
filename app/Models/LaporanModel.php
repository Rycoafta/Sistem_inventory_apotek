<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_penjualan', 'tanggal', 'name_obat', 'qty', 'harga'];
}
