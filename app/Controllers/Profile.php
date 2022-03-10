<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function my($username)
    {
        $model = $this->mkostumer;
        $sql = $model->where('username', $username)->first();
        $data['cust'] = $sql;
        $data['actView'] = "Kostumer/profile";
        return view('dashboard', $data);
    }
    public function vwupdate($username)
    {
        $model = $this->mkostumer;
        $sql = $model->where('username', $username)->first();
        $data['cust'] = $sql;
        $data['actView'] = "Kostumer/vwupdate";
        return view('dashboard', $data);
    }
    public function update()
    {
        $model = $this->mkostumer;
        $fname = $this->request->getVar('first_name');
        $lname = $this->request->getVar('last_name');
        $username = $this->request->getVar('username');
        $table = "mt_kostumer";
        // dd($img);
        $fullname = $fname . " " . $lname;
        $data = [
            'kostumer_nama' => $fullname,
            'kostumer_alamat' => $this->request->getVar('kostumer_alamat'),
            'kostumer_jk' => $this->request->getVar('kostumer_jk'),
            'kostumer_hp' => $this->request->getVar('kostumer_hp'),
            'kostumer_ktp' => $this->request->getVar('kostumer_ktp'),
            'date_birth' => $this->request->getVar('date_birth'),
            'kostumer_alamat' => $this->request->getVar('alamat'),
            'updated_at' => date('Y-m-d H:i:s'),

        ];
        // dd($data);
        $row = $model->where('username', $username)->first();
        $sql = $model->update($row, $data);
        session()->setFlashdata('scs', 'Success update profile!');
        return redirect()->to('Dashboard');
    }
    public function changeavatar()
    {
        $model = $this->mkostumer;
        $username = $this->request->getVar('username');
        $image = $this->request->getFile('avatar');
        $img = $image->getRandomName();
        $data = [
            'image' => $image->getName(),
        ];
        $image->move(ROOTPATH . 'assets/avatar/', $img);
        $row = $model->where('username', $username)->first();
        $sql = $model->update($row, $data);
        dd($sql);
    }

    public function del($id)
    {
        $model = $this->mkostumer;
        $sql = $model->where('id_kostumer', $id)->delete();
        // $model->delete($sql, $model);
        session()->setFlashdata('scs', 'Member telah dihapus!');
        return redirect()->to('Dashboard')->withInput();
    }
    public function vwadd()
    {
        $model = $this->mmobil;
        $sql = $model->findAll();
        $data['cust'] = $sql;
        $data['actView'] = "Mobil/index";
        return view('dashboard', $data);
    }
}
