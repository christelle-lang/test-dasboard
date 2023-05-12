<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class connexion_controller extends Controller
{
    public function connexion(){
        return view('user.connexion');
    }
}
