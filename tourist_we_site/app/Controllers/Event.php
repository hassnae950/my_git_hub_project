<?php

namespace App\Controllers;
use App\Modules\Event\Models\EvenementsModul;
use App\Models\EvenementsModel;



class Event extends BaseController
{
    public function index()
    {
        return view('dashboard/event');
    }

    public function afficher_table()
    {
        $model = new EvenementsModel();

        // Get the events data from the database
        $data['events'] = $model->getEvents();

        // Pass the data to the view
        return view('event', $data);  // Make sure 'event' is the correct view file name
    }

}
