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
            <div class="row">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <div class="col-3">
                        <img id="theme-logo" alt="" class="light-logo" src="assets/logo.svg">
                    </div>

                    <ul class="col-6 nav d-flex justify-content-evenly">
                        <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Updates</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Service</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Features</a></li>
                        <li class="nav-item"><a href="" class="nav-link">About Us</a></li>
                    </ul>

                    <div class="col-3 d-flex flex-row justify-content-evenly">
                        <i class="bi bi-person-circle"></i>
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
    <svg width="1425" height="737" viewBox="0 0 1425 737" fill="none" xmlns="http://www.w3.org/2000/svg"
        class="z-n1 position-absolute">
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M-15 737C-15 737 293.277 625.263 493.292 621.899C693.306 618.535 797.106 709.304 972.909 686.284C1148.71 663.263 1426 533.038 1426 533.038V-100H-15V737Z"
            fill="url(#paint0_linear_4_1903)" />
        <defs>
            <linearGradient id="paint0_linear_4_1903" x1="705.5" y1="-100" x2="705.5" y2="737"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#DB33F7" />
                <stop offset="1" stop-color="#3860EC" />
            </linearGradient>
        </defs>
    </svg>