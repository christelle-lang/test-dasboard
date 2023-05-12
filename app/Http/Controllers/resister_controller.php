<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class resister_controller extends Controller
{
    public function resister(){
        return view('user.resister');
    }
}
