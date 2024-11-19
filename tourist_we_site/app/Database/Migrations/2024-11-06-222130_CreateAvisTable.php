<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAvisTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_avis' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_client' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'id_guide' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
            'id_activite' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
            'note' => [
                'type'       => 'TINYINT',
                'constraint' => '1',
            ],
            'commentaire' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'date_avis' => [
                'type' => 'DATE',
            ],
        ]);
        $this->forge->addPrimaryKey('id_avis');
        $this->forge->addForeignKey('id_client', 'touriste', 'touriste_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_guide', 'GuideTouristique', 'id_guide', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('id_activite', 'evenements', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('Avis');
    }

    public function down()
    {
        $this->forge->dropTable('Avis');
    }
}
