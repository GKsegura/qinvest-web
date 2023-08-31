<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QInvest</title>
    @include('components.layout.css')
    @vite(['resources/js/theme.js'])
</head>

<body id="body">

    @include('components.layout.header')

    {{ $slot }}

    @include('components.layout.footer')

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>