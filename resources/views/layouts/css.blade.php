<!-- todos -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- home -->
@if(Route::currentRouteName() === 'home')
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endif

<!-- about us -->
@if(Route::currentRouteName() === 'about')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link href="{{ asset('css/about.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endif

<!-- form -->
@if(Route::currentRouteName() === 'register' or Route::currentRouteName() === 'login')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
<link href="{{ asset('css/form-page.css') }}" rel="stylesheet">
@endif

<!-- stock -->
@if (Route::currentRouteName() === 'stock')
<link href="{{ asset('css/stock.css') }}" rel="stylesheet">
@endif

<!-- education -->
@if (Route::currentRouteName() === 'education')
<link href="{{ asset('css/education.css') }}" rel="stylesheet">
@endif