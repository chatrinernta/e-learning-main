<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\Admin_Controller;
use App\Http\Controllers\Guru\Guru_Controller;
use App\Http\Controllers\Murid\Murid_Controller;
use App\Http\Controllers\SiswaController;
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
    Route::get('/XII_PPLG1', [Admin_Controller::class, 'showSiswa'])->name('admin.xii_pplg1');
    Route::get('/XII_PPLG2', [Admin_Controller::class, 'showSiswa'])->name('admin.XII_PPLG2');
    Route::get('/XII_DKV1', [Admin_Controller::class, 'XII_DKV1'])->name('admin.XII_DKV1');
    Route::get('/diskusi', [Admin_Controller::class, 'diskusi'])->name('admin.diskusi');

    // Route untuk Siswa
    Route::get('/siswas/create', [Admin_Controller::class, 'create'])->name('siswas.create'); // Form tambah siswa
    Route::post('/siswas', [Admin_Controller::class, 'store'])->name('siswas.store'); // Simpan data siswa
    Route::get('/siswas/{id}', [Admin_Controller::class, 'update'])->name('siswas.updateView');
    Route::post('/siswas/{id}', [Admin_Controller::class, 'updateSiswa'])->name('siswas.update');
    Route::delete('/siswas/{id}', [Admin_Controller::class, 'destroySiswa'])->name('siswas.destroy');
});
// Route::prefix('admin')->middleware([AdminMiddleware::class])->group(function () {
//     Route::get('/dashboard', [Admin_Controller::class, 'dashboard'])->name('admin.dashboard');
//     Route::get('/tugas', [Admin_Controller::class, 'tugas'])->name('admin.tugas');
//     Route::get('/XII_PPLG1', [Admin_Controller::class, 'showSiswa'])->name('admin.xii_pplg1');
//     Route::get('/XII_PPLG2', [Admin_Controller::class, 'XII_PPLG2'])->name('admin.XII_PPLG2');
//     Route::get('/XII_DKV1', [Admin_Controller::class, 'XII_DKV1'])->name('admin.XII_DKV1');
//     Route::get('/diskusi', [Admin_Controller::class, 'diskusi'])->name('admin.diskusi');
//     Route::get('/admin/siswas/create', [Admin_Controller::class, 'create'])->name('siswas.create');
//     Route::post('/admin/siswas', [Admin_Controller::class, 'store'])->name('siswas.store'); // Simpan data siswa
//     Route::get('/siswas/{id}/edit', [Admin_Controller::class, 'editSiswa'])->name('siswas.edit');
//     Route::put('/siswas/{id}', [Admin_Controller::class, 'updateSiswa'])->name('siswas.update');
//     Route::delete('/siswas/{id}', [Admin_Controller::class, 'destroySiswa'])->name('siswas.destroy');





// });

// Rute Guru - dilindungi oleh GuruMiddleware
Route::prefix('guru')->middleware([GuruMiddleware::class])->group(function () {
    Route::get('/dashboard', [Guru_Controller::class, 'dashboard'])->name('guru.dashboard');
    Route::get('/tugas', [Guru_Controller::class, 'tugas'])->name('guru.tugas');
    Route::get('/diskusi', [Guru_Controller::class, 'diskusi'])->name('guru.diskusi');
    Route::get('/XIIPPLG1', [Guru_Controller::class, 'XIIPPLG1'])->name('guru.XIIPPLG1');
    Route::get('/XIIPPLG2', [Guru_Controller::class, 'XIIPPLG2'])->name('guru.XIIPPLG2');
});

// Rute Murid - dilindungi oleh MuridMiddleware
Route::prefix('murid')->middleware([MuridMiddleware::class])->group(function () {
    Route::get('/dashboard', [Murid_Controller::class, 'dashboard'])->name('murid.dashboard');
    Route::get('/tugas', [Murid_Controller::class, 'tugas'])->name('murid.tugas');
    Route::get('/diskusi', [Murid_Controller::class, 'diskusi'])->name('murid.diskusi');
    Route::get('/daftarsiswa', [Murid_Controller::class, 'daftarsiswa'])->name('murid.daftarsiswa');
});

// Rute untuk menyimpan user baru, hanya bisa diakses oleh Admin
Route::post('/admin/users/store', [Admin_Controller::class, 'store'])->name('admin.users.store');
