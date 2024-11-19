<?php

namespace App\Controllers;

use App\Models\ReservationsModel;
use App\Models\EvenementsModel;
use App\Models\TouristeModel;

class AnalyticsController extends BaseController
{
    protected $ReservationsModel;
    protected $EvenementsModel;
    protected $TouristeModel;

    public function __construct()
    {
        $this->ReservationsModel = new ReservationsModel();
        $this->EvenementsModel = new EvenementsModel();
        $this->TouristeModel = new TouristeModel();
    }

    public function index()
    {
        // Fetching the count of reservations in the last 24 hours
        $data['lastReservationCount'] = $this->ReservationsModel->getLast24hCount();
        
        // Fetching the count of events in the last 24 hours
        $data['lastEventCount'] = $this->EvenementsModel->getLast24hCount();
        
        // Fetching the count of new members in the last 24 hours
        $data['newMembersCount'] = $this->TouristeModel->getNewMembersCountLast24h();

        return view('dashboard/dashboard', $data); // Ensure this is the correct view file
    }
}
