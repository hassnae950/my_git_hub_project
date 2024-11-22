<?php

namespace App\Controllers;

use App\Models\TouristeModel;

class Touriste extends BaseController
{
    protected $touristeModel;

    public function __construct()
    {
        // Initialiser le modèle
        $this->touristeModel = new TouristeModel();
    }

    public function index()
    {
        $data['touristes'] = $this->touristeModel->getTouristes();
        return view('dashboard/touriste', $data);
    }
    public function logout()
    {
        return view('dashboard/dashboard');
    }


    public function deleteTouriste($id)
    {
        if ($this->touristeModel->delete($id)) {
            // Ajouter un message de succès
            session()->setFlashdata('message', 'Touriste supprimé avec succès.');
        } else {
            // Ajouter un message d'erreur
            session()->setFlashdata('error', 'Erreur lors de la suppression du touriste.');
        }

        // Rediriger vers la page des touristes
        return redirect()->to('http://localhost:8080/touriste');
    }



}
