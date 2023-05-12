<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class typography_controller extends Controller
{
    public function typography(){
        return view('user.typography');
    }
}
