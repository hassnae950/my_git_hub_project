<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEvenementsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nom' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null'       => false,
            ],
            'date' => [
                'type' => 'DATE',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'lieu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'organisateur' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'capacite' => [
                'type' => 'INT',
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['upcoming', 'ongoing', 'completed'],
            ],
            'attraction_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('attraction_id', 'attractions', 'id', 'SET NULL', 'CASCADE');
        $this->forge->createTable('evenements');
    }

    public function down()
    {
        $this->forge->dropTable('evenements');
    }
}
