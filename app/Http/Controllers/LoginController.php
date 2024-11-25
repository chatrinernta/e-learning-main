<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Ambil kredensial login
        $credentials = $request->only('username', 'password');

        // Cek autentikasi
        if (Auth::attempt($credentials)) {
            // Regenerasi sesi setelah berhasil login
            $request->session()->regenerate();

            // Ambil role user yang login
            $role = Auth::user()->role;
            
            // Log untuk memantau login
            Log::info('User authenticated', ['username' => Auth::user()->username, 'role' => $role]);

            // Redirect sesuai dengan role pengguna
            return match ($role) {
                'admin' => redirect()->route('admin.dashboard'),
                'guru' => redirect()->route('guru.dashboard'),
                'murid' => redirect()->route('murid.dashboard'),
                default => redirect()->route('login')->withErrors(['message' => 'Role tidak dikenali']),
            };
        }

        // Jika login gagal
        Log::warning('Login attempt failed', ['username' => $request->username]);
        return redirect()->back()->withErrors(['message' => 'Username atau password salah']);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
