<?php

namespace App\Modules\Statistiques\Models;

use CodeIgniter\Model;

class StatistiquesModel extends Model
{
    protected $table = 'statistiques';
    protected $primaryKey = 'id';
    protected $allowedFields = ['attraction_id', 'visites_mensuelles', 'mois', 'annee', 'note_moyenne', 'feedback'];
}
