<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    function home()
    {
        return view('index');
    }
    function about()
    {
        return view('pages.about');
    }
    function login()
    {
        return view('auth.login');
    }
}