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


    public function delete($id = null, bool $purge = false)
    {
        // Suppression basée sur l'ID fourni
        if ($id !== null) {
            return $this->db->table('GuideTouristique')->delete(['id_guide' => $id]);
        }
    
        return false; // Pas d'ID fourni, rien à supprimer
    }









}
