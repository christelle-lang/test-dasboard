<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ajouter_camion_controller extends Controller
{
    public function AfficheCours(){
        $cours = DB::table('cours')->paginate();
        dd(DB::table('cours'));
        return view('afficherCours', ['cours' => $cours] );
    }
}
