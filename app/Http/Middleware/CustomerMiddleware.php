<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CustomerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (session('role') !== 'customer') {
            return redirect('/')->withErrors(['message' => 'Unauthorized access.']);
        }

        return $next($request);
    }
}

