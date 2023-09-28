<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $validationRules = [
        'nama' => 'required|alpha_space',
        'npm' => 'required|is_unique[user.npm]',
        'kelas' => 'required'
    ];
    protected $skipValidation = true;
    protected $validationMessages = [
        'nama' => [
            'required' => 'Nama harus diisi.',
            'alpha_space' => 'Nama harus berupa huruf.'
        ],
        'npm' => [
            'required' => 'NPM harus diisi.',
            'is_unique' => 'NPM sudah terdaftar.'
        ],
        'kelas' => [
            'required' => 'Kelas harus dipilih.'
        ]
    ];
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'npm', 'id_kelas'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function saveUser($data) {
        $this->insert($data);
    }
}