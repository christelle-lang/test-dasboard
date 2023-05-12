<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vector_map_controller extends Controller
{
    public function vector_map(){
        return view('user.vector_map');
    }
}
