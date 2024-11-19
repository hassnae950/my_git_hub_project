<?php

namespace App\Modules\Administrateur\Controllers;

use App\Controllers\BaseController;
use App\Modules\Administrateur\Models\AdministrateurModel;

class AdministrateurController extends BaseController
{
    public function index()
    {
        $model = new AdministrateurModel();
        $data['admins'] = $model->findAll();
        return view('App\Modules\Administrateur\Views\list', $data);
    }
}
