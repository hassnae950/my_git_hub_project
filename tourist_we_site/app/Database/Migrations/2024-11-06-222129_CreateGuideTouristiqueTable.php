<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGuideTouristiqueTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_guide' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'nom' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
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
            'specialite' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'disponibilite' => [
                'type' => 'TEXT',
            ],
            'experience' => [
                'type' => 'INT',
            ],
        ]);
        $this->forge->addPrimaryKey('id_guide');
        $this->forge->createTable('GuideTouristique');
    }

    public function down()
    {
        $this->forge->dropTable('GuideTouristique');
    }
}
