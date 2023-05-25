<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body id="body" class="body-claro">
    <header id="header" class="header-claro">
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