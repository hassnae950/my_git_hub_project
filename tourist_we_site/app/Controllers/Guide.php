<?php

namespace App\Controllers;
use App\Models\GuideTouristiqueModel;

class Guide extends BaseController
{
    protected $guideModel;

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
}
