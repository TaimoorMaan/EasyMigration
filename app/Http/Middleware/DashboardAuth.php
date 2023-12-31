<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DashboardAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if (!auth()->check()) {
            return redirect()->route('dashboard.login.form');
        }

        if (in_array(auth()->user()->role, ['admin', 'staff'])) {
            return $next($request);
        }

        return redirect()->route('home');
        
    }
}
