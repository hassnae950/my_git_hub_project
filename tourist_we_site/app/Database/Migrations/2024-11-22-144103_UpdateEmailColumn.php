<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateEmailColumn extends Migration
{
    public function up()
    {
        $this->forge->modifyColumn('touriste', [
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null'       => false, // Make it mandatory (NOT NULL)
                'unique'     => false, // Remove unique constraint
            ],
        ]);
    }
    

    public function down()
{
    $this->forge->modifyColumn('touriste', [
        'email' => [
            'type'       => 'VARCHAR',
            'constraint' => '30',
            'null'       => true,
            'unique'     => true,
        ],
    ]);
}

}
