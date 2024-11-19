<?php

namespace App\Controllers;

use App\Models\GuideTouristiqueModel;
use App\Models\ReservationsModel;
use App\Models\TouristeModel;

class Dashboard extends BaseController
{
    protected $guideModel;
    protected $touristeModel;
    protected $reservationModel;
    public function __construct()
    {
        $this->guideModel = new GuideTouristiqueModel();
        $this->touristeModel = new TouristeModel();
        $this->reservationModel = new ReservationsModel();
    }

    public function index()
    {
        // Get the current date
        $date = date('Y-m-d');

        // Calculate totals
        $totalGuides = $this->guideModel->countAll();
        $totalTouristes = $this->touristeModel->countAll();
        $totalReservations = $this->reservationModel->countAll();

        // Pass data to the view
        $data = [
            'currentDate' => $date,
            'totalGuides' => $totalGuides,
            'totalReservations' => $totalReservations,
            'totalTouristes' => $totalTouristes,
        ];

        return view('dashboard/dashboard', $data); // Ensure the view path is correct
    }
}
