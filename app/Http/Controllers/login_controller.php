<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class login_controller extends Controller
{
    public function login(){
        return view('user.login');
    }
}
