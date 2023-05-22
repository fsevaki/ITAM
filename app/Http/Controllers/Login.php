<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        return redirect()->intended('dashboard');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout()
    {
        return view('login');
    }
}
