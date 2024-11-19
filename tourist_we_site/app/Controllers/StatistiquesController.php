<?php

namespace App\Modules\Statistiques\Controllers;

use App\Controllers\BaseController;
use App\Modules\Statistiques\Models\StatistiquesModel;

class StatistiquesController extends BaseController
{
    public function index()
    {
        $model = new StatistiquesModel();
        $data['statistiques'] = $model->findAll();
        return view('App\Modules\Statistiques\Views\list', $data);
    }
}
