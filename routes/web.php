<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');

// Rotas do LOGIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rotas do CADASTRO
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'auth'])->name('register');
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'createForm'])->name('register');

