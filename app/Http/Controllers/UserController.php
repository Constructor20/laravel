<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function subscription() {
        return view('user.subscription');
    }

    public function connect() {
        return view('user.connect');
    }

    public function login(Request $request) {
        $user = User::where('email', $request->email)->first();
        
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('home');
        }
        
        return redirect()->route('user.connect')->with('error', 'Email ou mot de passe incorrect');
    }

    public function profils() {
        $users = User::all();
        return view('user.profils', compact('users'));
    }
    
    public function profil($id) {
        $user = User::findOrFail($id);
        return view('user.profil', compact('user'));
    }

    public function personalProfil() {
        $user = auth()->user();
        return view('user.profil', compact('user'));
    }
}
