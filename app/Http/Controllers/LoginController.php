<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attemp($credentials)){
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'username' => 'The Provider credentials do not match our records.',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
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
