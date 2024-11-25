<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Admin_Controller extends Controller
{

    // Method untuk menampilkan form tambah user di halaman dashboard admin
    public function dashboard()
    {
        // Arahkan ke view admin dashboard
        return view('Admin.admin_dashboard');
    }

    // Method untuk menyimpan user baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|unique:users,username',
            'role' => 'required|in:admin,guru,murid',
            'password' => 'required|min:6',
        ]);

        // Simpan ke database
        User::create([
            'username' => $request->username,
            'role' => $request->role,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        return redirect()->back()->with('success', 'User berhasil ditambahkan');
    }

    public function tugas()
    {
        return view ('Admin/admin_tugas');
    }
    public function daftar_siswa()
    {
        return view ('Admin/admin_daftarsiswa');
    }
    public function XII_PPLG1()
    {   
        return view ('Admin/admin_XIIPPLG1');
    }
    public function XII_PPLG2()
    {   
        return view ('Admin/admin_XIIPPLG2');
    }
    public function XII_DKV1()
    {   
        return view ('Admin/admin_XIIDKV1');
    }
    public function diskusi()
    {   
        return view ('Admin/admin_diskusi');
    }




    
}

