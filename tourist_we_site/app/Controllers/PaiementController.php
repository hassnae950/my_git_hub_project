<?php

namespace App\Modules\Paiement\Controllers;

use App\Controllers\BaseController;
use App\Modules\Paiement\Models\PaiementModel;

class PaiementController extends BaseController
{
    public function index()
    {
        $model = new PaiementModel();
        $data['paiements'] = $model->findAll();
        return view('App\Modules\Paiement\Views\list', $data);
    }
}
