<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $loginInfo = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($loginInfo)) {
            if(Auth::user()->role == 'admin') {
                return redirect('admin');
            } elseif(Auth::user()->role == 'staff admin'){
                return redirect('staff-admin');
            } elseif(Auth::user()->role == 'user'){
                return redirect('users');
            }
        } else {
            return redirect('')->withErrors('Email dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout() {
        Auth::logout();
        return redirect('');
    }
}
