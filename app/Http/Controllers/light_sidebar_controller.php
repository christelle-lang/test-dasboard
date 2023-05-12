<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class light_sidebar_controller extends Controller
{
    public function light_sidebar(){
        return view('user.light_sidebar');
    }
}
