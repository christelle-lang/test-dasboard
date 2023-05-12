<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class error_500_controller extends Controller
{
    public function error_500(){
        return view('user.error_500');
    }
}
