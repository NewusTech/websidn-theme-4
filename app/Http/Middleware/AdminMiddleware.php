<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirect to login route
        }

        // Check if user has the 'admin' role
        if (!Auth::user()->hasRole('admin')) {
            // Option 1: Redirect to a specific unauthorized page
            return redirect()->route('unauthorized');

            // Option 2: Throw an authorization exception (more suitable for API routes)
            // throw UnauthorizedException::fromRequest($request, 'You are not authorized to perform this action.');
        }

        return $next($request); // Allow request to proceed if user is authenticated and an admin
    }
}

