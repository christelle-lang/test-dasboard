<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class modal_controller extends Controller
{
    public function modal(){
        return view('user.modal');
    }
}
