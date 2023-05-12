<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Products_controller extends Controller
{
    public function Products(){
        return view('user.Products');
    }
}
