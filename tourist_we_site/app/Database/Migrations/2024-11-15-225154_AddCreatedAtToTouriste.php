<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCreatedAtToTouriste extends Migration
{
    public function up()
    {
        $this->forge->addColumn('touriste', [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true, // Allow null values initially
                'default' => null, // Optional, to handle existing rows
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('touriste', 'created_at');
    }
}
