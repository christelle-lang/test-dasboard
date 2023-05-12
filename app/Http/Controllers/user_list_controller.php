<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class user_list_controller extends Controller
{
    public function user_list(){
        return view('user.user_list');
    }
}
