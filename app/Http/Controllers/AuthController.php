<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (!auth()->check()) {
            return view('dashboard.login'); 
        }

        if (Auth::user()->role === 'admin' || Auth::user()->role === 'staff') {
            return redirect()->route('dashboard.index');
        }
        
        return redirect()->route('home');
        
    }

    public function showResetForm()
    {
        if (!auth()->check()) {
            return view('dashboard.reset'); 
        }

        if (Auth::user()->role === 'admin' || Auth::user()->role === 'staff') {
            return redirect()->route('dashboard.index');
        }
        
        return redirect()->route('home');
        
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Check user role to determine dashboard visibility
            if (Auth::user()->role === 'admin' || Auth::user()->role === 'staff') {
                return redirect()->route('dashboard.index');
            }

            // Handle other roles or default user redirect if needed
            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
