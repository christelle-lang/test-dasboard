<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminAuthController extends Controller
{

    public function ShowLoginForm(){
        return view('user.connexion');
    }

        public function login(Request $request)
    
        {
            return view('table_client');
        //     $credentials = $request->only('email', 'password');
    
        //     if (Auth::attempt($credentials)) {
        //         // Authentification réussie
        //         return redirect()->intended('admin/dashboard');
        //     } else {
        //         // Authentification échouée
        //         return back()->withErrors(['email' => 'Les informations d\'identification sont incorrectes.']);
        //     }
        // }
    
        // Autres méthodes pour la déconnexion, la récupération du mot de passe, etc.
   
        }
}
