<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class add_new_user_controller extends Controller
{
    public function add_new_user(){
        return view('user.add_new_user');
    }
}
