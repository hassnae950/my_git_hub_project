<?php

namespace App\Controllers;

use App\Models\EvenementsModel;

class EvenementsController extends BaseController
{
    protected $evenementModel;

    public function __construct()
    {
        // Initialiser le modèle
        $this->evenementModel = new EvenementsModel();
    }

    public function index()
    {
        // Récupérer les événements depuis le modèle
        $data['evenements'] = $this->evenementModel->getEvenements();
        
        // Charger la vue et passer les données
        return view('dashboard/event', $data);
   }
}
