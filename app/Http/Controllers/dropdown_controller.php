<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dropdown_controller extends Controller
{
    public function dropdown(){
        return view('user.dropdown');
    }
}
