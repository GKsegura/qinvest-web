<!-- todos -->
<link href="{{ asset('css/layout/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/layout/header.css') }}" rel="stylesheet">
<link href="{{ asset('css/layout/footer.css') }}" rel="stylesheet">
<link href="{{ asset('css/page/index.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



<!-- education -->
@if (Route::currentRouteName() === 'education')
<link href="{{ asset('css/page/education.css') }}" rel="stylesheet">
@endif

<!-- home -->
@if(Route::currentRouteName() === 'index')
<link href="{{ asset('css/page/home.css') }}" rel="stylesheet">
@endif

<!-- about us -->
@if(Route::currentRouteName() === 'about')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link href="{{ asset('css/page/about.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endif

<!-- form -->
@if(Route::currentRouteName() === 'register' or Route::currentRouteName() === 'login')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
<link href="{{ asset('css/layout/auth.css') }}" rel="stylesheet">
@endif

<!-- stock -->
@if (Route::currentRouteName() === 'stock')
<link href="{{ asset('css/stock.css') }}" rel="stylesheet">
@endif

<!-- stock -->
@if (Route::currentRouteName() === 'formulary')
<link href="{{ asset('css/page/formulary.css') }}" rel="stylesheet">
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endif

<!-- typeinvestor -->
@if (Route::currentRouteName() === 'typeinvestor')
<link href="{{ asset('css/page/typeinvestor.css') }}" rel="stylesheet">
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endif

<!-- variable -->
@if (Route::currentRouteName() === 'variable')
<link href="{{ asset('css/page/variable.css') }}" rel="stylesheet">
@endif

<!-- fixed -->
@if (Route::currentRouteName() === 'fixed')
<link href="{{ asset('css/page/fixed.css') }}" rel="stylesheet">
@endif

<!-- userprofile -->
@if (Route::currentRouteName() === 'profile')
<link href="{{ asset('css/page/userprofile.css') }}" rel="stylesheet">
<link href="{{ asset('css/form.css') }}" rel="stylesheet">

@endif

<!-- admin -->
@if (Route::currentRouteName() === 'admin')
<link href="{{ asset('css/page/admin.css') }}" rel="stylesheet">
@endif