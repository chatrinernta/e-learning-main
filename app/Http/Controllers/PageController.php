<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('dashboard');
    }
}

