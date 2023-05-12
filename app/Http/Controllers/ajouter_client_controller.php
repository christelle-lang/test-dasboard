<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ajouter_client_controller extends Controller
{
    public function ajouter_client(){
        $nom = request('nom');
        $prenom = request('prenom');
        $email=request('email');
        $num1=request('number1');
        $num2=request('number2');
        $pass=bcrypt(request('password'));
        DB::table('clients')->insert([
            'nomClient' => $nom,
            'prenomClient' => $prenom,
            'emailClient' => $email,
            'MotDePasseClient' => $pass,
            'numTelClient' => $num1,
            'numTelClient2' => $num2
        ]);
        
        return redirect()->back();
    }
}


