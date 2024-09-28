<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            // Optionally, you can add your own logic for validation
            // return redirect('/login')->with('error', 'You must be logged in to access this page.');
            return redirect('/');
        }

        // Optionally check user roles or permissions
        // if (Auth::user()->role !== 'admin') {
        //     return redirect('/');
        // }
    }
}
