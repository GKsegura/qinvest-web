<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function home()
    {
        return view ('login');
    }

    public function store()
    {
        var_dump('login');
    }

    public function destroy()
    {
        var_dump('login');
    }
}

