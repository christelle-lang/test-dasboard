<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Groups_controller extends Controller
{
    public function Groups(){
        return view('user.Groups');
    }
}
