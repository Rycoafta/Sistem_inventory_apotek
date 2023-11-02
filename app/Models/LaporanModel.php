<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_transaksi', 'tanggal', 'kode_obat', 'nama_obat', 'hb_obat', 'hj_obat', 'stok', 'jenis'];
}
