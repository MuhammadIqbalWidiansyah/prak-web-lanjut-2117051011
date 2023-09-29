<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;

class UserController extends BaseController
{
    public $kelasModel;
    public $userModel;

    public function __construct() {
        $this->kelasModel = new KelasModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser()
        ];
        return view('list_user', $data);
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
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'kelas' => $kelas,
            'title' => 'Create User'
        ];

        return view('create_user', $data);
    }

    public function store() {
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
        if (!$this->validate($this->userModel->validationRules, $this->userModel->validationMessages)) {
            $data = [
                'kelas' => $kelas,
                'validation' => $this->validator
            ];
            return view('create_user', $data);
        }

        $this->userModel->saveUser([
            'nama'=> $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'id_kelas' => $this->request->getVar('kelas')
        ]);

        return redirect('base_url')->to('/user');
    }
}
