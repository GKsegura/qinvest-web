<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QInvest</title>
    @include('components.layout.style')
    @vite(['resources/js/theme.js'])
    <!-- Inclua o arquivo CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Inclua o arquivo JavaScript do Bootstrap (junto com a biblioteca Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    @include('components.layout.header')

    <div class="page" id="app-page">
        {{ $slot }}
    </div>

    @include('components.layout.footer')

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('js/stick-header.js')}}"></script>

    @if(Route::currentRouteName() === 'index')
    <script src="{{asset('js/script.js')}}"></script>
    @endif
</body>

</html>