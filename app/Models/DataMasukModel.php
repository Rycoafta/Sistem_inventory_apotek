<?php

namespace App\Models;

use CodeIgniter\Model;

class DataMasukModel extends Model
{
    protected $table = 'data_masuk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_transaksi', 'tanggal', 'obat', 'jlh_stok', 'jenis'];
}