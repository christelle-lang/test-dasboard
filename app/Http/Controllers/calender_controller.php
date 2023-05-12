<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class calender_controller extends Controller
{
    public function calender(){
        return view('user.calender');
    }
}
