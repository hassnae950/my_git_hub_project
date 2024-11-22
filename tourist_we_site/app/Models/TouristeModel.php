<?php

namespace App\Models;

use CodeIgniter\Model;

class TouristeModel extends Model
{
    protected $table = 'touriste';
    protected $primaryKey = 'touriste_id';
    protected $allowedFields = ['nom', 'prenom', 'email', 'sexe', 'telephone', 'ville', 'pays', 'adresse', 'nationalite', 'preferences','created_at'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = null;
    protected $validationRules = [
        'email' => 'required|valid_email', // Make it required but not unique
    ];

    public function countAll()
    {
        return $this->countAllResults();
    }

    // Method to get tourist guides added in the last 24 hours
    public function getTouristesLast24h()
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->where('created_at >=', date('Y-m-d H:i:s', strtotime('-24 hours')));
        return $builder->countAllResults();
    }

    public function getTouristes()
    {
        return $this->findAll();
    }


    public function getNewMembersCountLast24h()
    {

    }

    public function delete($id = null, bool $purge = false)
{
    // Suppression basée sur l'ID fourni
    if ($id !== null) {
        return $this->db->table('touriste')->delete(['touriste_id' => $id]);
    }

    return false; // Pas d'ID fourni, rien à supprimer
}




















}
