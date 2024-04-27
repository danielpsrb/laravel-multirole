<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesiController extends Controller
{
    function index()
    {
        return view('pages.auth-login');
    }

    function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password harus diisi',
        ]);
    }
}
