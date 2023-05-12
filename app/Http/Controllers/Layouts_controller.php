<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Layouts_controller extends Controller
{
    public function Layouts(){
        return view('user.Layouts');
    }
}
