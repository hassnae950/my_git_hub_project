<?php

namespace App\Controllers;

class Guide extends BaseController
{
    public function index()
    {
        return view('dashboard/guide');
    }
}
