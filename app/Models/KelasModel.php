<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kelas';
    protected $validationRules = [
        'nama_kelas' => 'required|alpha_space|is_unique[kelas.nama_kelas]|max_length[1]'
    ];
    protected $skipValidation = true;
    protected $validationMessages = [
        'nama_kelas' => [
            'required' => 'Nama Kelas Harus Diisi',
            'alpha_space' => 'Nama Kelas Harus Berupa Huruf',
            'is_unique' => 'Nama Kelas Harus Berbeda',
            'max_length' => 'Nama Kelas Tidak Boleh Lebih Dari 1 Huruf'
        ]
    ];
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_kelas'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function saveKelas($data) {
        $this->insert($data);
    }

    public function getKelas($id = null) {
        if($id != null) {
            return $this->select('kelas.*')->find($id);
        }
        return $this->select('kelas.*')->findAll();
    }

    public function updateKelas($data, $id) {
        return $this->update($id, $data);
    }

    public function deleteKelas($id) {
        return $this->delete($id);
    }
}
