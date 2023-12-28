<?php

namespace App\Http\Middleware;

use Closure;

class CustomMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            // User logged in, allow access to the page
            return $next($request);
        }

        // User not logged in, redirect to login page or any other page
        return redirect('/login');
    }
}
