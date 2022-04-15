<?php

namespace App\Controllers;

use App\Models\KelulusanModel;

class Pengumuman extends BaseController
{
    protected $kelulusanModel;

    public function __construct()
    {
        $this->kelulusanModel = new KelulusanModel();
    }

    public function index()
    {

        // $login = $this->request->getPost('login');

        // if ($login) {
        //     $username = $this->request->getPost('username');
        //     $password = $this->request->getPost('password');

        //     if ($username == '' or $password == '') {
        //         $err = "Silahkan masukan username dan password";
        //     }
        //     if ($err) {
        //         session()->setFlashdata('error', $err);
        //         return redirect()->to("pengumuman");
        //     }
        // }

        // return view('pengumuman', $data);

        $nisn = $this->request->getVar('nisn');
        if ($nisn) {
            $this->kelulusanModel->search($nisn);
        } else {
            $kelulusan = $this->kelulusanModel;
        }
        dd($nisn);

        $data = [
            'title' => 'Pengumuman Kelulusan',
            'metaContent' => 'Sistem Informasi Kelulusan Online'
        ];
        return view('pengumuman', $data);
    }

    public function Beranda()
    {
        $kelulusan = $this->kelulusanModel->findAll();
        //dd($kelulusan);

        $data = [
            'title' => 'Beranda | Pengumuman Kelulusan',
            'metaContent' => 'Sistem Informasi Kelulusan Online',
            'kelulusan' => $kelulusan
        ];

        return view('pengumuman/beranda', $data);
    }

    public function Cari($username)
    {
        echo $username;
    }
}
