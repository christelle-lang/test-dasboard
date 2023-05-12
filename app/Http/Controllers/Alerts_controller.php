<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Alerts_controller extends Controller
{
    public function Alerts(){
        return view('user.Alerts');
    }
}
