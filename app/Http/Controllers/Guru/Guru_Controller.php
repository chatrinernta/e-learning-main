<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Guru_Controller extends Controller
{
    public function dashboard()
    {
        return view('Guru.guru_dashboard');
    }
}
