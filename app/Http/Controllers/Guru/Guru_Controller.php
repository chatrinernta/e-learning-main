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
}
