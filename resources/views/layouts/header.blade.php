<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QInvest</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script defer src="{{ asset('js/theme.js') }}"></script>
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
