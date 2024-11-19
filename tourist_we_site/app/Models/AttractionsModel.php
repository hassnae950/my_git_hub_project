<?php

namespace App\Modules\Attractions\Models;

use CodeIgniter\Model;

class AttractionsModel extends Model
{
    protected $table = 'attractions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom', 'description', 'localisation', 'horaires', 'tarifs', 'photo_url', 'categorie', 'capacite_max'];
}
