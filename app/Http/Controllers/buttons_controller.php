<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class buttons_controller extends Controller
{
    public function buttons(){
        return view('user.buttons');
    }
}
