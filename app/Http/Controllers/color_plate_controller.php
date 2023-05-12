<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class color_plate_controller extends Controller
{
    public function color_plate(){
        return view('user.color_plate');
    }
}
