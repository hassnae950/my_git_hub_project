<?php

namespace App\Controllers;

use App\Models\ReservationsModel;

class ReservationsController extends BaseController
{
    protected $reservationsModel;

    public function __construct()
    {
        // Initialize the model
        $this->reservationsModel = new ReservationsModel();
    }

    public function index()
    {
        $data['reservations'] = $this->reservationsModel->getReservations();
        return view('dashboard/reservation', $data);
    }

    public function logout()
    {
        return view('dashboard/dashboard');
    }


    public function deleteReservation($id)
    {
        if ($this->reservationsModel->delete($id)) {
            // Ajouter un message de succès
            session()->setFlashdata('message', 'reservation supprimé avec succès.');
        } else {
            // Ajouter un message d'erreur
            session()->setFlashdata('error', 'Erreur lors de la suppression du reservation.');
        }

        // Rediriger vers la page des touristes
        return redirect()->to('http://localhost:8080/reservation');
    }













}
