<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Basic_Elements_controller extends Controller
{
    public function Basic_Elements(){
        return view('user.Basic_Elements');
    }
}
