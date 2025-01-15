<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Pastikan pengguna sudah login dan memiliki role admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);  // Teruskan request jika admin
        }

        // Jika bukan admin, arahkan ke halaman home
        return redirect()->route('home');
    }
}

