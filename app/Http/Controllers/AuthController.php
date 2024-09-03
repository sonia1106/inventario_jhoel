<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showregisterForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $validateData= $request-> validate([
            'name'=> 'required|string|max:255',
            'email'=> 'required|string| email| max:255| unique:users',
            'password'=>'required|string| min:8|confirmed',
        ]);
        $user = User::create([
            'name'=> $validateData['name'],
            'email'=> $validateData['email'],
            'password'=> Hash::make($validateData['password']),
        ]);
        Auth::login($user);
        return redirect('/dashboard');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request-> only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()-> intended('/dashboard');
        } else {
            return back()-> withErrors([
                'email'=> 'El email no esta registrado'
            ]);
        }
    }
}
