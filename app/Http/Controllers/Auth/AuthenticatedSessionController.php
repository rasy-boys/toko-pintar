<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Autentikasi pengguna
        $request->authenticate();

        // Regenerasi session setelah login
        $request->session()->regenerate();

        // Periksa role user dan arahkan sesuai
        $role = Auth::user()->role;

        if ($role === 'admin') {
            return redirect()->route('admin.dashboard'); // Redirect ke dashboard untuk admin
        } elseif ($role === 'user') {
            return redirect()->route('home'); // Redirect ke home untuk user
        }

        // Jika role tidak dikenali, kembalikan ke halaman utama
        return redirect('/');
    }
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
