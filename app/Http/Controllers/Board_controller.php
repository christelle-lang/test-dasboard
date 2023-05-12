<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Board_controller extends Controller
{
    public function Board(){
        return view('user.Board');
    }
}
