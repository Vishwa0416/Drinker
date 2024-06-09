<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authmanager extends Controller
{
    function login()
    {
        return view('login');
    }

    function registration()
    {
        return view('registration');
    }
}
