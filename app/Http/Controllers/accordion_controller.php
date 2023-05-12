<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accordion_controller extends Controller
{
    public function accordion(){
        return view('user.accordion');
    }
}
