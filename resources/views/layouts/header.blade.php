<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QInvest</title>
    @include('layouts.css')
    @vite(['resources/js/theme.js'])

</head>

<body id="body" class="body-claro">
    <header id="theme-header" class="header-color">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <div class="col-3">
                        <a href="/">
                            <img id="theme-logo" alt="" class="light-logo" src="assets/logo.svg">
                        </a>
                    </div>

                    <ul class="col-6 nav d-flex justify-content-evenly">
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Updates</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Service</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Features</a></li>
                        <li class="nav-item"><a href="/about" class="nav-link">About Us</a></li>

                    </ul>

                    <div class="col-3 d-flex flex-row justify-content-evenly">
                        <a href="/register"><i class="bi bi-person-circle"></i></a>
                        <i id="theme-icon" class="bi bi-sun-fill"></i>
                    </div>
                </div>
            </div>
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