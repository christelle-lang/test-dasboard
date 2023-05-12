<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class wow_animation_controller extends Controller
{
    public function wow_animation(){
        return view('user.wow_animation');
    }
}
