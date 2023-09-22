<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'integer',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'varchar',
                'constraint' => '255',
            ],
            'npm' => [
                'type' => 'varchar',
                'constraint' => '10',
            ],
            'id_kelas' => [
                'type' => 'integer',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_kelas', 'kelas', 'id');
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user',true);
    }
}
