<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class carousel_controller extends Controller
{
    public function carousel(){
        return view('user.carousel');
    }
}
