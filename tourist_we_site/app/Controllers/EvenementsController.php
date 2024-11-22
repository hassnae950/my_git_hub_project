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


   public function deleteEvent($id)
   {
       if ($this->evenementModel->delete($id)) {
           // Ajouter un message de succès
           session()->setFlashdata('message', 'evenement supprimé avec succès.');
       } else {
           // Ajouter un message d'erreur
           session()->setFlashdata('error', 'Erreur lors de la suppression du touriste.');
       }

       // Rediriger vers la page des touristes
       return redirect()->to('http://localhost:8080/event');
   }

















}
