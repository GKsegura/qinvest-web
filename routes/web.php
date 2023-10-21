<?php

/* use Illuminate\Support\Facades\App; */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvestmentController;

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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Rotas do LOGIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Rotas do CADASTRO
Route::get('/register', [RegisterController::class, 'createForm'])->name('register');
Route::post('/register', [RegisterController::class, 'auth'])->name('register');

Route::get('/investment', [InvestmentController::class, 'createForm'])->name('investment');
Route::post('/investment', [InvestmentController::class, 'auth'])->name('investment');


// Rotas da EXIBIÇÃO DO FORMULÁRIO
Route::middleware(['auth'])->group(function () {
    Route::get('/formulary', [FormController::class, 'viewFormulary'])->name('formulary');
    Route::post('/formulary', [FormController::class, 'auth'])->name('formulary');
    Route::get('/typeinvestor', [UserController::class, 'viewProfileType'])->name('typeinvestor');
    Route::get('/education', [PageController::class, 'education'])->name('education');
    Route::get('/education/variable', [PageController::class, 'variable'])->name('variable');
    Route::get('/education/fixed', [PageController::class, 'fixed'])->name('fixed');
    Route::get('/stock', [InvestmentController::class, 'viewInvestment'])->name('stock');
});
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
Route::get('/profile', [UserController::class, 'viewUser'])->name('profile');
Route::get('/admin', [AdminController::class, 'Statistics'])->name('admin');
Route::get('/admin', [AdminController::class, 'Statistics'])->name('admin');
