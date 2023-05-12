<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class module_setting_controller extends Controller
{
    public function module_setting(){
        return view('user.module_setting');
    }
}
