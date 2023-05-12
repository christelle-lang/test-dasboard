<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Loading_Indicators_controller extends Controller
{
    public function Loading_Indicators(){
        return view('user.Loading_Indicators');
    }
}
