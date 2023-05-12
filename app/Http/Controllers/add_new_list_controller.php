<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class add_new_list_controller extends Controller
{
    public function add_new_list(){
        return view('user.add_new_list');
    }
}
