<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        echo 'Halo, Selamat Datang User';
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }

    function admin()
    {
        echo 'Halo, Selamat Datang di halaman Admin';
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }

    function staffAdmin()
    {
        echo 'Halo, Selamat Datang di halaman Staff Admin';
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }


}
