<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class datepicker_controller extends Controller
{
    public function datepicker(){
        return view('user.datepicker');
    }
}
