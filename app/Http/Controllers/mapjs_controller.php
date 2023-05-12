<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mapjs_controller extends Controller
{
    public function mapjs(){
        return view('user.mapjs');
    }
}
