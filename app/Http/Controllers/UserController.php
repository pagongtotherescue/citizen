<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);
    
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
    
        Auth::login($user);
    
        return redirect()->route('dashboard');
    }

    public function login(Request $request)
{

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        dd(Auth::id()); 
        return redirect()->intended('dashboard');
    } else {
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}

    public function logout()
    {
        Auth::logout();

        return redirect()->route('dashboard');
    }
}