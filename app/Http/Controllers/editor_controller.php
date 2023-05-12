<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class editor_controller extends Controller
{
    public function editor(){
        return view('user.editor');
    }
}
