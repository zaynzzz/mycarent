<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Mobil extends Model
{
    protected $table      = 'mt_mobil';
    protected $primaryKey = 'id_mobil';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'mobil_merk',
        'mobil_plat',
        'mobil_warna',
        'mobil_tahun',
        'mobil_status',
        'is_active',
        'kursi',
        'tarif',
        'image',
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
    public function jml($tbl)
    {
        $db = $this->db;
        $sql = $db->query("SELECT * FROM $tbl");
        $row = $sql->getNumRows();
        return $row;
    }
    public function getprefix($table, $field)
    {
        $db = $this->db;
        $sql = $db->query("SELECT * FROM $table WHERE $field ");
        $row = $sql->getRow();
        return $row;
    }
}
