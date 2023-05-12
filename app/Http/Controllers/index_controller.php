<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index_controller extends Controller
{
    public function index(){
        return view('user.index');
    }
}
