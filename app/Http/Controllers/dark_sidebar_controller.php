<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dark_sidebar_controller extends Controller
{
    public function dark_sidebar(){
        return view('user.dark_sidebar');
    }
}
