<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Checkout_controller extends Controller
{
    public function Checkout(){
        return view('user.Checkout');
    }
}
