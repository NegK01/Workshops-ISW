<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CrearTablaCarreras extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('carreras', true);
    }

    public function down()
    {
        $this->forge->dropTable('carreras');
    }
}
