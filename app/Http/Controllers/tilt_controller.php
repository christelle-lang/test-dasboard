<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tilt_controller extends Controller
{
    public function calentiltder(){
        return view('user.tilt');
    }
}
