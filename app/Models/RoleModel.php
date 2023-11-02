<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama'];

    public function user()
    {
        return $this->hasMany('App\Models\UserModel', 'nama', 'id');
    }

}
