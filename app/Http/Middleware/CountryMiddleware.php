<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class CountryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $visitorData = GeoIP::getLocation();

        DB::table('t_visitor')->insert([
            'ip_address' => $request->ip(),
            'country' => $visitorData['country'],
            'visited_at' => now(),
        ]);

        return $next($request);
        // return $next($request);
    }
}
