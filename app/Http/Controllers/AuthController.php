<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            if (Auth::user()->isAdmin()) {
                
                return redirect()->intended('/dashboard/products');
            } else {
                return redirect()->intended('/');
            }
        }
        
        return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
