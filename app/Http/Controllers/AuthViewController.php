<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthViewController extends Controller
{
    public function login_view()
    {
        return view('Auth.login');
    }

    public function login(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if(auth()->attempt($attributes)){
            return redirect('/customers');
        }

        return back()->withErrors(['email' => 'Your provided credentials could not be verified.']);
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/login')->with('success', 'Logged Out');
    }
}
