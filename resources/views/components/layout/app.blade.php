<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QInvest</title>
    @include('components.layout.css')
    @vite(['resources/js/theme.js'])
    <!-- Inclua o arquivo JavaScript do Bootstrap (junto com a biblioteca Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    @include('components.layout.header')
    <div class="page" id="app-page">

        @if(Route::currentRouteName() === 'index')
        <div class="page-home">
            {{ $slot }}

        </div>
        @elseif(Route::currentRouteName() === 'education')
        <div class="page-education">
            {{ $slot }}
        </div>

        @elseif(Route::currentRouteName() === 'formulary')
        <div class=" formulary-page">
            {{ $slot }}
        </div>
        @else
        {{ $slot }}
        @endif
    </div>


    @include('components.layout.footer')



    <script src="{{asset('js/formulary.js')}}"></script>

    <script src="{{asset('js/stick-header.js')}}"></script>

    @if(Route::currentRouteName() === 'index')
    <script src="{{asset('js/script.js')}}"></script>
    @endif
</body>

</html>