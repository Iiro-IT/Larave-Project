<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->user() || !auth()->user()->hasRole('admin')) {
            return redirect('home')->with('error', 'You do not have admin access.');
        }

        return $next($request);
    }
}
