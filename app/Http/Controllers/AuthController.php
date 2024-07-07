<?php

namespace App\Http\Controllers;

use App\Models\Gp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return redirect('login')->withErrors('Les informations d\'identification ne correspondent pas.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('login');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);
        //dd($validate);
        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            
            'nom' => $request->nom,
            
            'prenom' => $request->prenom,
            'password' => Hash::make($request->password),
            'admin' => $request->has('admin') ? $request->admin : false,
        ]);
        

        Auth::login($user);

        return redirect('register');
    }

   


}
