<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\Admin_Controller;
use App\Http\Controllers\Guru\Guru_Controller;
use App\Http\Controllers\Murid\Murid_Controller;
use Illuminate\Support\Facades\Route;





Route::get('/', [LoginController ::class,'index']);

Route::get('/admin/dashboard', [Admin_Controller::class, 'create'])->name('admin.users.create');
Route::get('/admin/tugas', [Admin_Controller ::class,'tugas'])->name('tugas');
Route::get('/admin/daftar_kelas', [Admin_Controller ::class,'daftar_kelas'])->name('daftar_kelas');
Route::get('/admin/daftar_siswa', [Admin_Controller ::class,'daftar_siswa'])->name('daftar_siswa');

Route::get('/guru/dashboard', [Guru_Controller ::class,'dashboard']);

Route::get('/murid/dashboard', [Murid_Controller ::class,'dashboard']);


Route::post('/admin/users', [Admin_Controller::class, 'store'])->name('admin.users.store');










