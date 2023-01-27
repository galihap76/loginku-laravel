<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function registrasi()
    {
        return view('auth.registrasi');
    }

    public function lupa_password()
    {
        return view('auth.lupa_password');
    }
}
