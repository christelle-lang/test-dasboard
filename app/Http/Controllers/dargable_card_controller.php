<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dargable_card_controller extends Controller
{
    public function dargable_card(){
        return view('user.dargable_card');
    }
}
