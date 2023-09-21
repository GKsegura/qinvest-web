<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    // app/Http/Middleware/Authenticate.php

    // public function handle($request, Closure $next, ...$guards)
    // {
    //     if (!Auth::check()) {
    //         return redirect()->route('login'); // Redirect to the login route
    //     }

    //     return $next($request);
    // }
}