<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>

<body id="body" class="body-claro">
    <header id="header" class="header-claro">
        <div class="header-left">
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
        </div>

        <a href="{{ url('/') }}">Home</a>
        @if (Route::has('login'))
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href=" {{ route('login') }}">Login</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
        @endif

        <a id="btnTema">Troca de tema</a>
    </header>