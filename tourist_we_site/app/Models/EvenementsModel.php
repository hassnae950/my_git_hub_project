<?php

namespace App\Models;

use CodeIgniter\Model;

class EvenementsModel extends Model
{
    protected $table = 'evenements';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom', 'date', 'description', 'lieu', 'organisateur', 'capacite', 'status', 'attraction_id'];


    public function getEvenements()
    {
        return $this->findAll();
    }

    public function getLast24hCount()
    {
     
    }


    public function delete($id = null, bool $purge = false)
{
    // Suppression basée sur l'ID fourni
    if ($id !== null) {
        return $this->db->table('evenements')->delete(['id' => $id]);
    }

    return false; // Pas d'ID fourni, rien à supprimer
}







}
