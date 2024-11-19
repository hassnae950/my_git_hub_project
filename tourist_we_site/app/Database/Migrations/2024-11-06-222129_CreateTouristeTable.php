<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTouristeTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'touriste_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nom' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null'       => false,
            ],
            'prenom' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null'       => false,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'unique'     => true,
            ],
            'sexe' => [
                'type'       => 'ENUM',
                'constraint' => ['Male', 'Female'],
                'default'    => 'Female',
            ],
            'telephone' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'ville' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'pays' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'adresse' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'nationalite' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'preferences' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addPrimaryKey('touriste_id');
        $this->forge->createTable('touriste');
    }

    public function down()
    {
        $this->forge->dropTable('touriste');
    }
}
