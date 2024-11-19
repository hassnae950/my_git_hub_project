<?php

namespace App\Modules\Administrateur\Models;

use CodeIgniter\Model;

class AdministrateurModel extends Model
{
    protected $table = 'Administrateur';
    protected $primaryKey = 'idAdmin';
    protected $allowedFields = ['nom', 'prenom', 'email', 'telephone', 'sexe', 'date_creation', 'dernier_connexion'];
}
