<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStatistiquesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'attraction_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'visites_mensuelles' => [
                'type' => 'INT',
            ],
            'mois' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'annee' => [
                'type' => 'INT',
            ],
            'note_moyenne' => [
                'type'       => 'DECIMAL',
                'constraint' => '3,2',
            ],
            'feedback' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('attraction_id', 'attractions', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('statistiques');
    }

    public function down()
    {
        $this->forge->dropTable('statistiques');
    }
}
