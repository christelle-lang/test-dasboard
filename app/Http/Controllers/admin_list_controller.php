<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admin_list_controller extends Controller
{
    public function admin_list(){
        return view('user.admin_list');
    }
}
