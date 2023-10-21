<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QInvest</title>
    @include('components.layout.css')
    @vite(['resources/js/theme.js'])
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>

<body>
    @include('components.layout.header')
    <div class="page" id="head-page">
        @if(Route::currentRouteName() === 'education')
        <div class="body-education-page">
            {{ $slot }}
        </div>
        @elseif(Route::currentRouteName() === 'formulary')
        <div class="page-formulary">
            {{ $slot }}
        </div>
        @else
        <div id="app-page">
            {{ $slot }}
        </div>
        @endif
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>