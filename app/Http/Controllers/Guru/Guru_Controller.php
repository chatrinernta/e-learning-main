<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Guru_Controller extends Controller
{
    public function dashboard()
    {
        $role = Auth::user()->role;
        return view('Guru.guru_dashboard', compact('role'));
    }
    public function tugas()
    {
        $role = Auth::user()->role;
        return view('Guru.guru_tugas', compact('role'));
    }
    public function diskusi()
    {
        $role = Auth::user()->role;
        return view('Guru.guru_diskusi', compact('role'));
    }
    public function XIIPPLG1()
    {
        $role = Auth::user()->role;
        return view('Guru.guru_XIIPPLG1', compact('role'));
    }
    public function XIIPPLG2()
    {
        $role = Auth::user()->role;
        return view('Guru.guru_XIIPPLG2', compact('role'));
    }




}
