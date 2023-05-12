<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profilebox_controller extends Controller
{
    public function profilebox(){
        return view('user.profilebox');
    }
}
