<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Product_Details_controller extends Controller
{
    public function Product_Details(){
        return view('user.Product_Details');
    }
}
