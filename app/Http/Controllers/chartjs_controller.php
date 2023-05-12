<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class chartjs_controller extends Controller
{
    public function chartjs(){
        return view('user.chartjs');
    }
}
