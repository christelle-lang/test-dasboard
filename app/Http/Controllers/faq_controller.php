<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class faq_controller extends Controller
{
    public function faq(){
        return view('user.faq');
    }
}
