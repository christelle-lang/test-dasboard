<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class basic_card_controller extends Controller
{ 
    public function basic_card(){
        return view('user.basic_card');
    }
}
