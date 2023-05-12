<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class theme_card_controller extends Controller
{
    public function theme_card(){
        return view('user.theme_card');
    }
}
