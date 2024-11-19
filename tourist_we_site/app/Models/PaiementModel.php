<?php

namespace App\Modules\Paiement\Models;

use CodeIgniter\Model;

class PaiementModel extends Model
{
    protected $table = 'Paiement';
    protected $primaryKey = 'id_paiement';
    protected $allowedFields = ['id_reservation', 'montant', 'date_paiement', 'methode_paiement', 'statut_paiement', 'reference_paiement', 'remarque'];
}
