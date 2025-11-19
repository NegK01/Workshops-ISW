<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CrearTablaEstudiantes extends Migration
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
            'id_carrera' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
        ]);

        $this->forge->addKey('id', true);

        // Foreign key EXACTA al dump
        $this->forge->addForeignKey('id_carrera', 'carreras', 'id');

        $this->forge->createTable('estudiantes', true);
    }

    public function down()
    {
        $this->forge->dropTable('estudiantes');
    }
}
