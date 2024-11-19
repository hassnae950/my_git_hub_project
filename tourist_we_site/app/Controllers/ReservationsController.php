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
}
