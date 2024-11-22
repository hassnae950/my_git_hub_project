<?php

namespace App\Controllers;

class Message extends BaseController
{
    public function index()
    {
        return view('dashboard/message');
    }
}
