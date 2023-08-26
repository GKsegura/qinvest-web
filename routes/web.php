<?php

/* use Illuminate\Support\Facades\App; */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FormController;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/stock', [PageController::class, 'stock'])->name('stock');
Route::get('/education', [PageController::class, 'education'])->name('education');

// Rotas do LOGIN
Route::post('/login', [App\Http\Controllers\AuthController::class, 'createForm'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rotas do CADASTRO
Route::get('/register', [RegisterController::class, 'createForm'])->name('register');
Route::post('/register', [RegisterController::class, 'auth'])->name('register');

// Rotas da EXIBIÇÃO DO FORMULÁRIO
Route::get('/viewformulary', [FormController::class, 'index'])->name('viewformulary');
Route::post('/editformulary', [FormController::class, 'editformulary'])->name('editformulary');
