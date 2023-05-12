<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class notification_controller extends Controller
{
    public function notification(){
        return view('user.notification');
    }
}
