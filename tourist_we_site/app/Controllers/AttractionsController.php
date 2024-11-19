<?php

namespace App\Modules\Attractions\Controllers;

use App\Controllers\BaseController;
use App\Modules\Attractions\Models\AttractionsModel;

class AttractionsController extends BaseController
{
    public function index()
    {
        $model = new AttractionsModel();
        $data['attractions'] = $model->findAll();
        return view('App\Modules\Attractions\Views\list', $data);
    }
}
