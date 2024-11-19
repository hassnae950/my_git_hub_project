<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        // Créer la table reservations
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'touriste_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'attraction_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'date_reservation' => [
                'type' => 'DATE',
            ],
            'nombre_personnes' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'prix_total' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'statut' => [
                'type' => 'ENUM',
                'constraint' => ['confirmed', 'pending', 'canceled'],
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        
        // Ajouter les clés étrangères
        $this->forge->addForeignKey('touriste_id', 'touriste', 'touriste_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('attraction_id', 'attractions', 'id', 'CASCADE', 'CASCADE');
        
        // Créer la table
        $this->forge->createTable('reservations');
    }

    public function down()
    {
        // Si la table existe, la supprimer
        $this->forge->dropTable('reservations');
    }
}
