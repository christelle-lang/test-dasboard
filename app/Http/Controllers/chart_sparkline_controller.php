<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class chart_sparkline_controller extends Controller
{
    public function chart_sparkline(){
        return view('user.chart_sparkline');
    }
}
