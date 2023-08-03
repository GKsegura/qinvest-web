<?php

/* use Illuminate\Support\Facades\App; */
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('index');});
Route::get('/about', [PageController::class, 'about'])->name('about');

// Rotas do LOGIN
Route::get('/login', [AuthController::class, 'createLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Rotas do CADASTRO
Route::get('/register', [RegisterController::class, 'createForm'])->name('register');
Route::post('/register', [RegisterController::class, 'auth'])->name('register');