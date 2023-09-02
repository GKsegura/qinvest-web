<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QInvest</title>
    @include('components.layout.css')
    @vite(['resources/js/theme.js'])
</head>

<body>

    <x-.auth.auth-card>
        {{ $slot }}
    </x-.auth.auth-card>
</body>

</html>