<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pagination_controller extends Controller
{
    public function Pagination(){
        return view('user.Pagination');
    }
}
