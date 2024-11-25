<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\Admin_Controller;
use App\Http\Controllers\Guru\Guru_Controller;
use App\Http\Controllers\Murid\Murid_Controller;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\GuruMiddleware;
use App\Http\Middleware\MuridMiddleware;
use Illuminate\Support\Facades\Route;

// Rute tampilan login (GET) dan proses login (POST)
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');
// Rute logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Middleware untuk autentikasi
Route::middleware(['auth'])->group(function () {
    // Rute khusus Admin
    Route::middleware([AdminMiddleware::class])->group(function () {
        Route::get('/admin/dashboard', [Admin_Controller::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/admin/tugas', [Admin_Controller::class, 'tugas'])->name('admin.tugas');
        Route::get('/admin/daftar_kelas', [Admin_Controller::class, 'daftar_kelas'])->name('admin.daftar_kelas');
        Route::get('/admin/daftar_siswa', [Admin_Controller::class, 'daftar_siswa'])->name('admin.daftar_siswa');
        Route::post('/admin/users', [Admin_Controller::class, 'store'])->name('admin.users.store');
    });

    // Rute khusus Guru
    Route::middleware([GuruMiddleware::class])->group(function () {
        Route::get('/guru/dashboard', [Guru_Controller::class, 'dashboard'])->name('guru.dashboard');
    });
Route::get('/', [LoginController ::class,'index']);
Route::get('/admin/dashboard', [Admin_Controller::class, 'create'])->name('admin.users.create');
Route::get('/admin/tugas', [Admin_Controller ::class,'tugas'])->name('tugas');
Route::get('/admin/daftar_siswa', [Admin_Controller ::class,'daftar_siswa'])->name('daftar_siswa');
Route::get('/admin/XII_PPLG1', [Admin_Controller ::class,'XII_PPLG1'])->name('XII_PPLG1');
Route::get('/admin/XII_PPLG2', [Admin_Controller ::class,'XII_PPLG2'])->name('XII_PPLG2');
Route::get('/admin/XII_DKV1', [Admin_Controller ::class,'XII_DKV1'])->name('XII_DKV1');
Route::get('/admin/diskusi', [Admin_Controller ::class,'diskusi'])->name('diskusi');




Route::get('/guru/dashboard', [Guru_Controller ::class,'dashboard']);

Route::get('/murid/dashboard', [Murid_Controller ::class,'dashboard']);


Route::post('/admin/users', [Admin_Controller::class, 'store'])->name('admin.users.store');




    // Rute khusus Murid
    Route::middleware([MuridMiddleware::class])->group(function () {
        Route::get('/murid/dashboard', [Murid_Controller::class, 'dashboard'])->name('murid.dashboard');
    });
});

