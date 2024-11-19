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










}
