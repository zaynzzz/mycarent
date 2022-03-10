<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Kostumer extends Model
{
    protected $table      = 'mt_kostumer';
    protected $primaryKey = 'id_kostumer';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'kostumer_nama',
        'kostumer_alamat',
        'kostumer_jk',
        'kostumer_hp',
        'kostumer_ktp',
        'is_active',
        'role_id',
        'username',
        'password',
        'updated_at',
    ];

    protected $useTimestamps = true;
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
        $role_id = '1';
        $id = time();
        $sql = $this->query("INSERT INTO mt_kostumer (id_kostumer,kostumer_nama,username,mt_kostumer.password,is_active,role_id) VALUES ('$id','$nama','$username','$password','$is_active','$role_id')");
        return $sql;
    }
    public function ceklogin($username)
    {
        $sql = $this->query("SELECT * FROM mt_kostumer WHERE mt_kostumer.username = '$username'");
        $row = $sql->getRow();
        return $row;
    }
}
