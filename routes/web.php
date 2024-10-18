<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [PageController ::class,'index'])->name('dashboard');

Route::get('/', [LoginController ::class,'index']);
Route::get('/tugas', [TugasController ::class,'index'])->name('tugas');

// Route::get('login', function () {
//     return view('main');
// })->middleware('auth');

// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');







