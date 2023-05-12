<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class role_permissions_controller extends Controller
{
    public function role_permissions(){
        return view('user.role_permissions');
    }
}
