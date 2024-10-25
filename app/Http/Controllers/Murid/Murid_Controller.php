<?php

namespace App\Http\Controllers\Murid;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Murid_Controller extends Controller
{
    public function dashboard()
    {
        return view('Murid.murid_dashboard');
    }
}
