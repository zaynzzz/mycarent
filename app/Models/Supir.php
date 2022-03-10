<?php

namespace App\Models;

use CodeIgniter\Model;

class Supir extends Model
{
    protected $table      = 'supir';
    protected $primaryKey = 'idsupir';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'admin_name',
        'username',
        'password',
        'role_id',
        'is_active',
        'id_order',
    ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function reg($nama, $username,  $password)
    {
        $db = db_connect();
        $is_active = '1';
        $id = time();
        $sql = $this->query("INSERT INTO mt_users (id_user,mt_users.nama,username,mt_users.password,is_active) VALUES ('$id','$nama','$username','$password','$is_active')");
        return $sql;
    }
}
