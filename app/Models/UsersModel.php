<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email','password', 'image', 'role', 'created_at', 'updated_at', 'deleted_at'];

    public function role()
    {
        return $this->belongsTo('App\Models\RoleModel', 'nama', 'id');
    }

}
