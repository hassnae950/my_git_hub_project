<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservationsModel extends Model
{
    protected $table = 'reservations'; // Correct table name
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'touriste_id', 'attraction_id', 'titre_reservation', 
        'date_reservation', 'nombre_personnes', 'prix_total', 'statut'
    ];

    public function getReservations()
    {
        // Join with 'touriste' and 'attractions' tables to get names
        $builder = $this->db->table($this->table);
        $builder->select('reservations.*, touriste.nom AS touriste_name, attractions.nom AS attraction_name');
        $builder->join('touriste', 'touriste.touriste_id = reservations.touriste_id', 'left');
        $builder->join('attractions', 'attractions.id = reservations.attraction_id', 'left'); // Corrected join condition

        return $builder->get()->getResultArray();
    }

    public function getLast24hCount()
    {
     
    }


    public function delete($id = null, bool $purge = false)
    {
        // Suppression basée sur l'ID fourni
        if ($id !== null) {
            return $this->db->table('reservations')->delete(['id' => $id]);
        }
    
        return false; // Pas d'ID fourni, rien à supprimer
    }
}
