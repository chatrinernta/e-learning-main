<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Admin_Controller extends Controller
{

    // Method untuk menampilkan form tambah user di halaman dashboard admin
    public function dashboard()
    {
        // Arahkan ke view admin dashboard

        $role = Auth::user()->role;
        return view('Admin.admin_dashboard', compact('role'));
    }
 // Tampilkan form tambah siswa
 public function create()
 {
     return view('Admin.create_siswa'); // Sesuaikan nama view
 }

 // Simpan data siswa ke database

 public function store(Request $request)
 {
    $validated = $request->validate([
        'nis' => 'required|numeric|unique:siswas,nis',
        'nisn' => 'required|numeric|unique:siswas,nisn',
        'nama' => 'required|string',
        'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        'tempat_lahir' => 'required|string',
        'tanggal_lahir' => 'required|date_format:Y-m-d',
        'kelas' => 'required|string'
    ]);
    
 
     // Simpan data ke database
     Siswa::create($validated);
 
     return redirect()->route('admin.xii_pplg1')->with('success', 'Data siswa berhasil ditambahkan!');
 }
 





 public function showSiswa()
 {
     $siswas = Siswa::all(); // Gunakan model Siswa
     return view('Admin.admin_xii_pplg_1', compact('siswas'));
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
        return view ('Admin.admin_xii_pplg_1');
    }
    public function XII_PPLG2()
    {   
        return view ('Admin.admin_xii_pplg_2');
    }
    public function XII_DKV1()
    {   
        return view ('Admin.admin_xii_dkv_1');
    }
    public function diskusi()
    {   
        return view ('Admin.admin_diskusi');
    }
    // public function editSiswa($id)
    // {
    //     // Ambil data siswa berdasarkan ID
    //     $siswa = DB::table('siswas')->where('id', $id)->first();

    //     // Periksa jika data siswa tidak ditemukan
    //     if (!$siswa) {
    //         return redirect()->route('admin.xii_pplg1')->with('error', 'Data siswa tidak ditemukan.');
    //     }

    //     // Tampilkan halaman edit siswa
    //     return view('admin.edit_siswa', compact('siswa'));
    // }

    public function updateSiswa(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'nis' => 'required|string|max:20',
        'nisn' => 'required|string|max:20',
    ]);

    // Update data di database
    DB::table('siswas')->where('id', $id)->update([
        'nama' => $request->nama,
        'nis' => $request->nis,
        'nisn' => $request->nisn,
    ]);

    // Redirect ke halaman siswa dengan pesan sukses
    return redirect()->route('admin.xii_pplg1')->with('success', 'Data siswa berhasil diupdate.');
}

public function destroySiswa($id)
{
    // Cari siswa berdasarkan ID
    $siswa = DB::table('siswas')->where('id', $id)->first();

    // Jika data siswa tidak ditemukan, tampilkan pesan error
    if (!$siswa) {
        return redirect()->route('admin.xii_pplg1')->with('error', 'Data siswa tidak ditemukan.');
    }

    // Hapus data siswa dari database
    DB::table('siswas')->where('id', $id)->delete();

    // Redirect dengan pesan sukses
    return redirect()->route('admin.xii_pplg1')->with('success', 'Data siswa berhasil dihapus.');
}







    
}

