<?php

namespace App\Modules\GuideTouristique\Controllers;

use App\Controllers\BaseController;
use App\Modules\GuideTouristique\Models\GuideTouristiqueModel;

class GuideTouristiqueController extends BaseController
{
    public function index()
    {
        $model = new GuideTouristiqueModel();
        $data['guides'] = $model->findAll();
        return view('App\Modules\GuideTouristique\Views\list', $data);
    }
}
