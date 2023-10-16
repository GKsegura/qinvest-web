<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Rating;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Test;

class AdminController extends Controller
{
    public function checkUser ()
    {
        if (Auth::user()->email != 'admin@gmail.com' and Auth::user()->password != '$2y$10$Zjc8JjLVxFbrzmSNHD1ZRuMQYjfM1K/qRoMlQ72GFQEybhpOg/OwW')
        {
            return redirect()->route('index', 'Registro concluído com sucesso!');
        }
    }

}
