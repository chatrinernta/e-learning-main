<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller

{

    public function showLoginForm() 
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi input dari form login
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Ambil data login
        $credentials = $request->only('username', 'password');

        // Cek autentikasi
        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil, dapatkan role user
            $role = Auth::user()->role;

            // Redirect sesuai role
            if ($role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($role === 'guru') {
                return redirect()->route('guru.dashboard');
            } else {
                return redirect()->route('murid.dashboard');
            }
        } else {
            // Jika login gagal, kirim error message
            return redirect()->back()->withErrors(['message' => 'Username atau password salah']);
        }
    }
}
