<?php

namespace App\Modules\Avis\Controllers;

use App\Controllers\BaseController;
use App\Modules\Avis\Models\AvisModel;

class AvisController extends BaseController
{
    public function index()
    {
        $model = new AvisModel();
        $data['avis'] = $model->findAll();
        return view('App\Modules\Avis\Views\list', $data);
    }
}
