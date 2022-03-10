<?php

namespace App\Controllers;

use App\Models\M_Admin;
use App\Models\M_Kostumer;
use App\Models\M_Mobil;
use App\Models\Test;
use App\Models\Supir;

class Dashboard extends BaseController
{

    public function index()
    {
        $model = $this->mmobil;
        $mkostumer = $this->mkostumer;
        $madmin = $this->madmin;
        // dd($row);
        $admin = "mt_admin";
        $mobil = "mt_mobil";
        $kostumer = "mt_kostumer";
        $cadmin = $model->jml($admin);
        $ckostumer = $model->jml($kostumer);
        $row = $model->jml($mobil);
        $mobil = $model->findAll();
        $admin = $madmin->findAll();
        $kostumer = $mkostumer->findAll();
        $data['cadmin'] = $cadmin;
        $data['ckostumer'] = $ckostumer;
        $data['kostumer'] = $kostumer;
        $data['mobil'] = $mobil;
        $data['admin'] = $admin;
        $data['count'] = $row;
        $data['actView'] = "Dashboard/index";
        return view('dashboard', $data);
    }
}
