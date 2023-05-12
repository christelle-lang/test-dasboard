<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ajouter_conducteur_controller extends Controller
{
    public function ajouter_conducteur(){
        $nom = request('Nom');
        $prenom = request('Prenom');
        $email=request('Email');
        $numTel=request('Numéro de téléphone');
        $numImmatriculation=request("Numéro d'immatriculation");
        $pass=bcrypt(request('Mot de passe'));
        DB::table('conducteurs')->insert(['nomConducteur' => $nom, 'prenomConducteur' => $prenom, 'emailConducteur' => $email, 'motDePasseConducteur' => $pass, 'numTelConducteur' => $numTel, 'numImmatriculation'=> $numImmatriculation]);
        //$cours = DB::table('cours')->get();
        //return view('afficher');
        // return redirect()->route('afficherProf');
    
    }
}