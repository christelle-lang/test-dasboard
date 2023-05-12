<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mail_box_controller extends Controller
{
    public function mail_box(){
        return view('user.mail_box');
    }
}
