<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class chat_controller extends Controller
{
    public function chat(){
        return view('user.chat');
    }
}
