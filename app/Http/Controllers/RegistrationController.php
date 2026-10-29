<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $validatedData = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
        //create new user in the database
        $user=User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        ]);
        //login newly registered user
        Auth::login($user);
        //regenerate the session to prevent session fixation attacks
        $request->session()->regenerate();
        //redirect to the intended page or home page
        return redirect()->Route('login')->with('success', 'Registration successful! You are now logged in.');

    }
}
