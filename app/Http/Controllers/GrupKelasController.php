<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrupKelas;

class GrupKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = GrupKelas::all(); // Ambil semua data
        return view('Admin.index', compact('data')); // Arahkan ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.create'); // Form tambah data
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'link' => 'required|url',
        ]);

        GrupKelas::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
        ]);

        return redirect()->route('grup_kelas.index')->with('success', 'Grup Kelas berhasil ditambahkan!');
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
        $item = GrupKelas::findOrFail($id); // Cari data berdasarkan ID
        return view('Admin.edit', compact('item')); // Arahkan ke form edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required|url',
        ]);

        $item = GrupKelas::findOrFail($id);
        $item->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
        ]);

        return redirect()->route('grup_kelas.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = GrupKelas::findOrFail($id);
        $item->delete();

        return redirect()->route('grup_kelas.index')->with('success', 'Data berhasil dihapus!');
    }
}
