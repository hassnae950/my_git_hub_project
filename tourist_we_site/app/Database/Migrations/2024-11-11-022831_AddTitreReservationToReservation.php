<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTitreReservationToReservations extends Migration
{
    public function up()
    {
        // Add the 'titre_reservation' column to the 'reservations' table
        $this->forge->addColumn('reservations', [
            'titre_reservation' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true, // This makes the column optional
            ],
        ]);
    }

    public function down()
    {
        // Remove the 'titre_reservation' column from the 'reservations' table
        $this->forge->dropColumn('reservations', 'titre_reservation');
    }
}
