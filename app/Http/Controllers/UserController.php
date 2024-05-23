<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Display login form
    public function login() {
        return view('users.login');
    }

    public function authenticate(Request $request) {
        $form_fields = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        
        if (auth()->attempt($form_fields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Logged in successfully');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request) {
        $request->session()->regenerateToken();
        auth()->logout();
        return redirect('/')->with('message', 'Logged out successfully');
    }
}
