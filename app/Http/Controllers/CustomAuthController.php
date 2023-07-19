<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('client.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // L'authentification réussie, rediriger l'utilisateur vers la page souhaitée
            return redirect()->intended('/');
        } else {
            // L'authentification a échoué, rediriger l'utilisateur vers la page de connexion avec un message d'erreur
            return redirect()->back()->withErrors(['client.login' => 'Identifiants invalides']);
        }
    }
}
