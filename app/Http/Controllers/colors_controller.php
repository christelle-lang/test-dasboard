<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class colors_controller extends Controller
{
    public function colors(){
        return view('user.colors');
    }
}
