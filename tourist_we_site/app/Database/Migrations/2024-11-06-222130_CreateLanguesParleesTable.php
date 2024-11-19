<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLanguesParleesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_guide' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'langue' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
        ]);
        $this->forge->addPrimaryKey(['id_guide', 'langue']);
        $this->forge->addForeignKey('id_guide', 'GuideTouristique', 'id_guide', 'CASCADE', 'CASCADE');
        $this->forge->createTable('Langues_Parlees');
    }

    public function down()
    {
        $this->forge->dropTable('Langues_Parlees');
    }
}
