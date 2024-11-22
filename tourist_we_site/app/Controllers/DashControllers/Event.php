<?php

namespace App\Controllers;

class Event extends BaseController
{
    public function index()
    {
        return view('dashboard/event');
    }
}
