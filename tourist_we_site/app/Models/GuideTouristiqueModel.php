<?php

namespace App\Models;

use CodeIgniter\Model;

class GuideTouristiqueModel extends Model
{
    protected $table = 'GuideTouristique';
    protected $primaryKey = 'id_guide';
    protected $allowedFields = ['nom', 'email', 'telephone', 'ville', 'pays', 'adresse', 'specialite', 'disponibilite', 'experience'];

    public function getGuides()
    {
        return $this->findAll();
    }

}
