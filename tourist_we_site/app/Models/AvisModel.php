<?php

namespace App\Modules\Avis\Models;

use CodeIgniter\Model;

class AvisModel extends Model
{
    protected $table = 'Avis';
    protected $primaryKey = 'id_avis';
    protected $allowedFields = ['id_client', 'id_guide', 'id_activite', 'note', 'commentaire', 'date_avis'];
}
