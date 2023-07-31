<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', function () {return view('index');}); // ROTA QUE ATUALMENTE CHAMA A HOME

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home'); TEM QUE ARRUMAR ESTA ROTA
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register');

// Rotas do LOGIN
<<<<<<< HEAD
<<<<<<< HEAD
Route::post('/login', [App\Http\Controllers\AuthController::class, 'createForm'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

=======
=======
>>>>>>> parent of 6b2bb82 (WIP: login)
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
>>>>>>> parent of 6b2bb82 (WIP: login)

// Rotas do CADASTRO
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'auth'])->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'createForm'])->name('register');
