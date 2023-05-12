<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class fixed_footer_controller extends Controller
{
    public function fixed_footer(){
        return view('user.fixed_footer');
    }
}
