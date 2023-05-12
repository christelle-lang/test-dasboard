<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Builder_controller extends Controller
{
    public function Builder(){
        return view('user.Builder');
    }
}
