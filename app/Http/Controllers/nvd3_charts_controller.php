<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class nvd3_charts_controller extends Controller
{
    public function nvd3_charts(){
        return view('user.nvd3_charts');
    }
}
