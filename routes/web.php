<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileSekolahController;
use App\Http\Controllers\KelolaBeritaController;
use App\Http\Controllers\KelolaSiswaController;
use App\Http\Controllers\KelolaGaleriController;
use App\Http\Controllers\KelolaGuruController;
use App\Http\Controllers\KelolaEkstraKuliKulerController;
// use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('admin');
// });

Route::get(uri: '/', action:[DashboardController::class,'indexPublic'])->name('public.dashboard');
Route::get(uri: '/login', action:[AuthController::class,'index'])->name('admin.login');

Route::prefix('admin')->group(function () {
Route::get(uri: '/profile', action:[ProfileSekolahController::class,'index'])->name('admin.profile');
Route::get(uri: '/dashboard', action:[DashboardController::class,'index'])->name('admin.dashboard');
Route::get(uri: '/berita', action:[KelolaBeritaController::class,'index'])->name('admin.berita');
Route::get(uri: '/siswa', action:[KelolaSiswaController::class,'index'])->name('admin.siswa');
Route::get(uri: '/galeri', action:[KelolaGaleriController::class,'index'])->name('admin.galeri');
Route::get(uri: '/guru', action:[KelolaGuruController::class,'index'])->name('admin.guru');
Route::get(uri: '/ekstrakulikuler', action:[KelolaEkstraKuliKulerController::class,'index'])->name('admin.ekstrakulikuler');
});
