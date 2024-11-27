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
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



// Rute Admin - tidak perlu middleware di sini karena sudah dilindungi oleh middleware di group
Route::prefix('admin')->middleware([AdminMiddleware::class])->group(function () {
    Route::get('/dashboard', [Admin_Controller::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/tugas', [Admin_Controller::class, 'tugas'])->name('admin.tugas');
    Route::get('/daftar_kelas', [Admin_Controller::class, 'daftar_kelas'])->name('admin.daftar_kelas');
    Route::get('/daftar_siswa', [Admin_Controller::class, 'daftar_siswa'])->name('admin.daftar_siswa');
    Route::get('/XII_PPLG1', [Admin_Controller::class, 'XII_PPLG1'])->name('admin.XII_PPLG1');
    Route::get('/XII_PPLG2', [Admin_Controller::class, 'XII_PPLG2'])->name('admin.XII_PPLG2');
    Route::get('/XII_DKV1', [Admin_Controller::class, 'XII_DKV1'])->name('admin.XII_DKV1');
    Route::get('/diskusi', [Admin_Controller::class, 'diskusi'])->name('admin.diskusi');
});

// Rute Guru - dilindungi oleh GuruMiddleware
Route::prefix('guru')->middleware([GuruMiddleware::class])->group(function () {
    Route::get('/dashboard', [Guru_Controller::class, 'dashboard'])->name('guru.dashboard');
});

// Rute Murid - dilindungi oleh MuridMiddleware
Route::prefix('murid')->middleware([MuridMiddleware::class])->group(function () {
    Route::get('/dashboard', [Murid_Controller::class, 'dashboard'])->name('murid.dashboard');
});

// Rute untuk menyimpan user baru, hanya bisa diakses oleh Admin
Route::post('/admin/users/store', [Admin_Controller::class, 'store'])->name('admin.users.store');
