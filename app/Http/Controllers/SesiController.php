<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesiController extends Controller
{
    function index()
    {
        return view('pages.auth-login');
    }
}
