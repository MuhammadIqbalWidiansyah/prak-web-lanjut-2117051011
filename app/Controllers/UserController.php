<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        //
    }
    
    public function profile($nama = "", $npm = "", $kelas = "") {
        $data = [
            'nama'=> $nama,
            'npm' => $npm,
            'kelas' => $kelas
        ];

        return view('profile', $data);
    }
    
    public function create() {
        $kelasModel = new KelasModel();
        $kelas = $kelasModel->getKelas();

        $data = [
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store() {
        $userModel = new UserModel();

        $kelas = [
            [
                'id' => 1,
                'nama_kelas' => 'A'
            ],
            [
                'id' => 2,
                'nama_kelas' => 'B'
            ],
            [
                'id' => 3,
                'nama_kelas' => 'C'
            ],
            [
                'id' => 4,
                'nama_kelas' => 'D'
            ]
        ];

        // Validasi input
        if (!$this->validate($userModel->validationRules, $userModel->validationMessages)) {
            $data = [
                'kelas' => $kelas,
                'validation' => $this->validator
            ];
            return view('create_user', $data);
        }

        $userModel->saveUser([
            'nama'=> $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'id_kelas' => $this->request->getVar('kelas')
        ]);

        $data = [
            'nama'=> $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'kelas' => $this->request->getVar('kelas')
        ];

        return view('profile',$data);
    }
}
