<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Badges_controller extends Controller
{
    public function Badges(){
        return view('user.Badges');
    }
}
