<?php

namespace App\Models;

use CodeIgniter\Model;

class KasirModel extends Model
{
    protected $table = 'kasir';
    protected $primaryKey = 'id';
    protected $allowedFields = ['total', 'bayar', 'kembali', 'qty'];
}
