<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
 
    public function showLoginForm()
    {
        return view('auth.connexion'); 
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'Les informations de connexion sont incorrectes.',
        ]);
    }
}
