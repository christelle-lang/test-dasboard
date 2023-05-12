<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class apex_chart_controller extends Controller
{
    public function apex_chart(){
        return view('user.apex_chart');
    }
}
