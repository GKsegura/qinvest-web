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
    function actions()
    {
        return view('pages.actions');
    }
    /*function register()
    {
        return view('auth.page.register');
    }
    function login()
    {
        return view('auth.page.login');
    }*/
}
