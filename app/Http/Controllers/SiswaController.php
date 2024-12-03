<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use\App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showSiswa()
{
    $siswas = Siswa::all(); // Mengambil semua data siswa dari tabel
    return view('Admin.admin_xii_pplg_1', compact('siswas'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswas.create'); // Tampilkan form create
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama' => 'required',
        'kelas' => 'required',
    ]);

    Siswa::create($request->all()); // Simpan data
    return redirect()->route('siswas.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
{
    $siswa = Siswa::findOrFail($id); // Cari data siswa
    return view('siswas.edit', compact('siswa')); // Kirim ke view edit
}

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
