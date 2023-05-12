<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class am_chart_controller extends Controller
{
    public function am_chart(){
        return view('user.am_chart');
    }
}
