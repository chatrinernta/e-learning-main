<?php

namespace App\Http\Controllers\Murid;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Murid_Controller extends Controller
{
    public function dashboard()
    {
        $role = Auth::user()->role;
        return view('Murid.murid_dashboard', compact('role'));
    }
    public function tugas()
    {
        $role = Auth::user()->role;
        return view('Murid.murid_tugas', compact('role'));
    }
    public function diskusi()
    {
        $role = Auth::user()->role;
        return view('Murid.murid_diskusi', compact('role'));
    }
    public function daftarsiswa()
    {
        $role = Auth::user()->role;
        return view('Murid.murid_daftarsiswa', compact('role'));
    }
}
