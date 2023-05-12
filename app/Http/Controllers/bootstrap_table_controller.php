<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bootstrap_table_controller extends Controller
{
    public function bootstrap_table(){
        return view('user.bootstrap_table');
    }
}
