<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QInvest</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body id="body" class="body-claro">
    <header id="theme-bg">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-3">
                    <img id="light-logo" src="assets/logo.svg" alt="" class="light-logo">
                </div>

                <div class="col-6">
                    <div class="d-flex flex-row gap-2">
                        <div class="col">
                            <a class="nav-link active" href="">Home</a>
                        </div>

                        <div class="col">
                            <a class="nav-link active" href="">Updates</a>
                        </div>

                        <div class="col">
                            <a class="nav-link active" href="">Services</a>
                        </div>

                        <div class="col">
                            <a class="nav-link active" href="">Features</a>
                        </div>

                        <div class="col">
                            <a class="nav-link active" href="">About us</a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="d-flex flex-row px-5">
                        <div class="col">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <div class="col">
                            <i id="theme-icon" class="bi bi-sun-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="header-left">
                <img id="logo" src="assets/logo.svg" alt="" class="logo-claro">
            </div>
            <div class="header-center">
                <a href="">Home</a>
                <a href="">Updates</a>
                <a href="">Services</a>
                <a href="">Features</a>
                <a href="">About us</a>
            </div>
            <div class="header-right">

                <i class="bi bi-person-circle"></i>
                <a id="btnTema"><i id="theme-icon" class="bi bi-sun-fill"></i></a>
            </div>
            <!-- <a href="{{ url('/') }}">Home</a>
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href=" {{ route('login') }}">Login</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
                @endif -->
        </div>
    </header>
