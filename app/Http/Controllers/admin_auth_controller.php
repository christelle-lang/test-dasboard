<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class admin_auth_controller extends Controller
{
    public function showLoginForm()
    {
        return view('user.connexion');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('accordion');
        }

        return redirect()->back()->withErrors(['email' => 'Email ou mot de passe incorrect.']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
