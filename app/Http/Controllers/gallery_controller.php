<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class gallery_controller extends Controller
{
    public function gallery(){
        return view('user.gallery');
    }
}
