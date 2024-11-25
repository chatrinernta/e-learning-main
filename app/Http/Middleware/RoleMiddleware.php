<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        // Cek apakah pengguna terautentikasi dan memiliki role yang sesuai
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);  // Lanjut ke route jika sesuai
        }
        auth('web')->logout();
        // Jika role tidak sesuai, arahkan ke halaman error atau login
        return redirect('/')->withErrors(['error' => 'Unauthorized access.']);
    }
}
