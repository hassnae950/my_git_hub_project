<?php

namespace App\Controllers;
use App\Models\GuideTouristiqueModel;

class Guide extends BaseController
{


    public function __construct()
    {
        // Initialiser le modèle
        $this->guideModel = new GuideTouristiqueModel();
    }

    public function index()
    {
        $data['guides'] = $this->guideModel->getGuides();
        return view('dashboard/guide', $data);
    }
    public function logout()
    {
        return view('dashboard/dashboard');
    }

    protected $guideModel;

    public function deleteGuide($id)
    {
        if ($this->guideModel->delete($id)) {
            // Ajouter un message de succès
            session()->setFlashdata('message', 'guide supprimé avec succès.');
        } else {
            // Ajouter un message d'erreur
            session()->setFlashdata('error', 'Erreur lors de la suppression du touriste.');
        }

        // Rediriger vers la page des touristes
        return redirect()->to('http://localhost:8080/guide');
    }
}
