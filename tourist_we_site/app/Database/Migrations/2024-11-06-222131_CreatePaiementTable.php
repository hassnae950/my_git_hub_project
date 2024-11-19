<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaiementTable extends Migration
{
    public function up()
    {
      // Table reservations (vérifier dans la migration)
$this->forge->addField([
    'id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
        'auto_increment' => true,
    ],
    // autres colonnes...
]);

$this->forge->addPrimaryKey('id');
$this->forge->createTable('reservations');

// Table paiement (vérifier dans la migration)
$this->forge->addField([
    'id_paiement' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
        'auto_increment' => true,
    ],
    'id_reservation' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
    ],
    // autres colonnes...
]);

$this->forge->addPrimaryKey('id_paiement');
$this->forge->addForeignKey('id_reservation', 'reservations', 'id', 'CASCADE', 'CASCADE');
$this->forge->createTable('paiement');

    }

    public function down()
    {
        $this->forge->dropTable('paiement');
    }
}
