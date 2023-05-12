<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class invoice_controller extends Controller
{
    public function invoice(){
        return view('user.invoice');
    }
}
