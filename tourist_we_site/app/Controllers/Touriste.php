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


}
