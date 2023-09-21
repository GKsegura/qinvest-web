<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{

    function index()
    {
        return view('pages.index');
    }
    function about()
    {
        return view('pages.about');
    }
    function stock()
    {
        return view('pages.stock');
    }
    function education()
    {
        return view('pages.education');
    }

    function variable(){
        return view('pages.variable');
    }
    function fixed(){
        return view('pages.fixed');
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
