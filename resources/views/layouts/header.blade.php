<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>QInvest</title>
    @include('layouts.css')
    @vite(['resources/js/theme.js'])
</head>

<body id="body">
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
                        <li class="nav-item"><a href="/" class="header-link nav-link">Home</a></li>
                        <li class="nav-item"><a href="/education" class="header-link nav-link">Education</a></li>
                        <li class="nav-item"><a href="" class="header-link nav-link">Service</a></li>
                        <li class="nav-item"><a href="/stock" class="header-link nav-link">Stocks</a></li>
                        <li class="nav-item"><a href="/about" class="header-link nav-link">About Us</a></li>

                    </ul>

                    <div class="col-3 d-flex flex-row justify-content-evenly">
                        <a href="/register" class="header-icon"><i class="bi bi-person-circle"></i></a>
                        <i id="theme-icon" class="bi bi-sun-fill header-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>