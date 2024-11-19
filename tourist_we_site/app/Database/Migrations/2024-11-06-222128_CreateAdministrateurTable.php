<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAdministrateurTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idAdmin' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nom' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'prenom' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'unique'     => true,
            ],
            'telephone' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'sexe' => [
                'type'       => 'ENUM',
                'constraint' => ['Male', 'Female'],
                'default'    => 'Female',
            ],
            'date_creation' => [
                'type' => 'DATE',
            ],
            'dernier_connexion' => [
                'type' => 'DATE',
            ],
        ]);
        $this->forge->addPrimaryKey('idAdmin');
        $this->forge->createTable('Administrateur');

      
    }

    public function down()
    {
        $this->forge->dropTable('Administrateur');
    }
}
