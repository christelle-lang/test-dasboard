<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class forgot_controller extends Controller
{
    public function forgot(){
        return view('user.forgot');
    }
}
