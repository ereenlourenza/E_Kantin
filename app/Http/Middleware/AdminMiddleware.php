<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (session('role') !== 'admin') {
            return redirect('/loginAdmin')->withErrors(['message' => 'Unauthorized access.']);
        }

        return $next($request);
    }
}
