<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    // twari formulaire 
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Vérification 
    public function login(Request $request)
    {
        $request->validate([
            'pseudo' => 'required',
            'mot_de_passe' => 'required',
        ]);

        $admin = Admin::where('pseudo', $request->pseudo)->first();

        if ($admin && $admin->mot_de_passe === $request->mot_de_passe) {
            // ken 5atfet
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['login' => 'Identifiants incorrects']);
    }

    // win yemchi
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
