<?php

namespace App\Controllers;

class Touriste extends BaseController
{
    public function index()
    {
        return view('dashboard/touriste');
    }
}
