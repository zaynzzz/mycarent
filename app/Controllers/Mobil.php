<?php

namespace App\Controllers;

class Mobil extends BaseController
{
    public function index()
    {
        $model = $this->mmobil;
        $sql = $model->findAll();
        $data['cust'] = $sql;
        $data['actView'] = "Mobil/index";
        return view('dashboard', $data);
    }
    public function tambah()
    {
        $model = $this->mmobil;
        $merk = $this->request->getVar('mobil_merk');
        $plat = $this->request->getVar('mobil_plat');
        $warna = $this->request->getVar('mobil_warna');
        $tahun = $this->request->getVar('mobil_tahun');
        $status = $this->request->getVar('mobil_status');
        $kursi = $this->request->getVar('kursi');
        $tarif = $this->request->getVar('tarif');
        $image = $this->request->getFiles('image');
        dd($_POST);
        $randomNm = $image->getRandomName();
        $stmobil = $this->request->getVar('stmobil');
        $id = time();
        $sql = $model->query("INSERT INTO mt_mobil (id_mobil,mobil_merk,mobil_plat,mobil_warna,mobil_tahun,mobil_status,kursi,tarif,mt_mobil.image,stmobil) VALUES ('$id','$merk','$plat','$warna','$tahun','$status','$kursi','$tarif','$image','$stmobil')");
        session()->setFlashdata('scs', 'Mobil baru ditambahkan!');
        return redirect()->to('Dashboard')->withInput();
    }
    public function vwupdate($id_mobil)
    {
        $model = $this->mmobil;
        $sql = $model->where('id_mobil', $id_mobil)->first();
        $data['car'] = $sql;
        $data['actView'] = "Mobil/vwupdate";
        return view('dashboard', $data);
    }
    public function update($id)
    {
        $model = $this->mmobil;
        $table = "mt_kostumer";
        // dd($_POST);
        $data = [
            'mobil_merk' => $this->request->getVar('mobil_merk'),
            'mobil_warna' => $this->request->getVar('mobil_warna'),
            'mobil_plat' => $this->request->getVar('mobil_plat'),
            'mobil_tahun' => $this->request->getVar('mobil_tahun'),
            'mobil_status' => $this->request->getVar('mobil_status'),

        ];
        // dd($data);
        $row = $model->where('id_mobil', $id)->first();
        $sql = $model->update($row, $data);
        session()->setFlashdata('scs', 'Success update profile!');
        return redirect()->to('Dashboard');
    }
    public function del($id)
    {
        $model = $this->mmobil;
        $sql = $model->where('id_mobil', $id)->delete();
        // $model->delete($sql, $model);
        session()->setFlashdata('scs', 'Mobil telah dihapus!');
        return redirect()->to('Dashboard')->withInput();
    }
}
