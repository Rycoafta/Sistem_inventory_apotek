<?php

namespace App\Models;

use CodeIgniter\Model;

class KasirModel extends Model
{
    protected $table = 'kasir';
    protected $primaryKey = 'id';
    protected $allowedFields = ['faktur', 'tanggal', 'kode_obat', 'obat', 'qty', 'price', 'nama_pembeli'];
}
