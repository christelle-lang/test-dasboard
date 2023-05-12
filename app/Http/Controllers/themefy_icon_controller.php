<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class themefy_icon_controller extends Controller
{
    public function themefy_icon(){
        return view('user.themefy_icon');
    }
}
