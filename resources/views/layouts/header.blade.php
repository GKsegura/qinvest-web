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
    <header id="theme-header" class="header-color">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-3">
                    <img id="theme-logo" alt="" class="light-logo" src="assets/logo.svg">

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

            <!-- TESTE AAAAAAAAAAAAAAAAAAAAAA
            AAAAAAAAAAAAAAAAAAAAAAAAAAAA
            AAAAAAAAAAAAAAAAAAAAAAAAAAAA -->

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