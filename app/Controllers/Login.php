<?php

namespace App\Controllers;

use App\Models\M_Admin;
use App\Models\M_Kostumer;

class Login extends BaseController
{
    public function index()
    {
        // $data['actView'] = "Auth/login";
        return view('Auth/login');
    }
    public function signup()
    {
        // $data['actView'] = "Auth/login";
        return view('Auth/signup');
    }
    public function regist()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Tidak Boleh Kosong'
                ]
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username Tidak Boleh Kosong',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password Tidak Boleh Kosong'
                ]
            ],
            'password2' => [
                'rules' => 'matches[password]|required',
                'errors' => [
                    'required' => 'Password Tidak Boleh Kosong',
                    'matches' => 'Password Tidak sama'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            $model = new M_Kostumer();
            // $model = new M_Admin();
            $nama = $this->request->getVar('nama');
            $username = $this->request->getVar('username');
            $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
            // dd($this->request->getVar());
            $sql = $model->reg($nama, $username, $password);
            $row = (object)$sql;
            session()->setFlashdata('scs', 'Account has been created!');
            return redirect()->to('Login')->withInput();        // dd($row);
        }
    }
    public function login()
    {
        session();
        // $model = new M_Admin();
        $model = new M_Kostumer();
        $db = db_connect();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $sql = $model->ceklogin($username);
        $dataUser = $sql;
        // dd($dataUser);
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'kostumer_nama' => $dataUser->kostumer_nama,
                    'role_id' => $dataUser->role_id,
                    'logged_in' => TRUE
                ]);

                session()->setFlashdata('scs', 'Berhasil Login');
                return redirect()->to(base_url('Dashboard'));
            } else {
                session()->setFlashdata('error', ' Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username Salah');
            return redirect()->back();
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('Login');
    }
}
