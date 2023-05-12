<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class navs_controller extends Controller
{
    public function navs(){
        return view('user.navs');
    }
}
