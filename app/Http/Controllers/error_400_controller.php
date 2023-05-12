<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class error_400_controller extends Controller
{
    public function error_400(){
        return view('user.error_400');
    }
}
