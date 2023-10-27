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

    public function show($id) {
        $user = $this->userModel->getUser($id);
        $data = [
            'title' => 'Profile',
            'user' => $user
        ];
        return view('profile', $data);
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
                'validation' => $this->validator,
                'title' => 'Store User'
            ];
            return view('create_user', $data);
        }

        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();

        if($foto->move($path, $name)) {
            $foto = base_url($path . $name);
        }

        $this->userModel->saveUser([
            'nama'=> $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'id_kelas' => $this->request->getVar('kelas'),
            'foto' => $foto
        ]);

        

        return redirect()->to('/user');
    }

    public function edit($id) {
        $user = $this->userModel->getUser($id);
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas
        ];
        return view('edit_user', $data);
    }

    public function update($id) {
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $data = [
            'nama'=> $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'id_kelas' => $this->request->getVar('kelas')
        ];

        if ($foto->isValid()) {
            $name = $foto->getRandomName();
            if ($foto->move($path, $name)) {
                $foto_path = base_url($path . $name);
                $data['foto'] = $foto_path;
            }
        }
        $result = $this->userModel->updateUser($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
            ->with('error', 'Gagal Menyimpan Data');
        }
        return redirect()->to(base_url('/user'));
    }

    public function destroy($id) {
        $result = $this->userModel->deleteUser($id);
        if(!$result) {
            return redirect()->back()->with('error', 'Gagal Menghapus Data');
        }
        return redirect()->to(base_url('user/'))
        ->with('success', 'Berhasil Menghapus Data');
    }
}
