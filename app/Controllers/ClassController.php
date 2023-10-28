<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;

class ClassController extends BaseController
{
    public $kelasModel;

    public function __construct() {
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Class',
            'class' => $this->kelasModel->getKelas()
        ];
        return view('list_class', $data);
    }

    public function create() {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'kelas' => $kelas,
            'title' => 'Create Class'
        ];

        return view('create_class', $data);
    }

    public function store() {
        $kelas = $this->kelasModel->getKelas();
        // Validasi input
        if (!$this->validate($this->kelasModel->validationRules, $this->kelasModel->validationMessages)) {
            $data = [
                'kelas' => $kelas,
                'validation' => $this->validator,
                'title' => 'Store Class'
            ];
            return view('create_class', $data);
        }

        $this->kelasModel->saveKelas([
            'nama_kelas'=> $this->request->getVar('nama_kelas')
        ]);
        return redirect()->to('/class');
    }

    public function edit($id) {
        $kelas = $this->kelasModel->getKelas($id);
        $data = [
            'title' => 'Edit Class',
            'kelas' => $kelas
        ];
        return view('edit_class', $data);
    }

    public function update($id) {
        $data = [
            'nama_kelas'=> $this->request->getVar('nama_kelas'),
        ];
        $result = $this->kelasModel->updateKelas($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
            ->with('error', 'Gagal Menyimpan Data');
        }
        return redirect()->to(base_url('/class'));
    }

    public function destroy($id) {
        $result = $this->kelasModel->deleteKelas($id);
        if(!$result) {
            return redirect()->back()->with('error', 'Gagal Menghapus Data');
        }
        return redirect()->to(base_url('class/'))
        ->with('success', 'Berhasil Menghapus Data');
    }
}
