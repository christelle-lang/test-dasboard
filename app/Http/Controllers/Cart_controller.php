<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Cart_controller extends Controller
{
    public function Cart(){
        return view('user.Cart');
    }
}
