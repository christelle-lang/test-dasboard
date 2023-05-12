<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class empty_page_controller extends Controller
{
    public function empty_page(){
        return view('user.empty_page');
    }
}
