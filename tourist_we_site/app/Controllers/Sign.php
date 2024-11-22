<?php

namespace App\Controllers;
use App\Models\TouristeModel;


class Sign extends BaseController
{
       public function view_sign(){
        return view('login/sign');
       }


}
