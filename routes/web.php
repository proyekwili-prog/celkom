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




Route::get(uri: '/', action:[DashboardController::class,'indexPublic'])->name('public.dashboard');
Route::get(uri: '/login', action:[AuthController::class,'index'])->name('admin.login');
Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');



Route::post('/login', [AuthController::class, 'processLogin'])->name('admin.login.submit');

Route::get('/admin/siswa', [KelolaSiswaController::class, 'index'])->name('admin.siswa');
Route::post('/admin/siswa', [KelolaSiswaController::class, 'store'])->name('admin.siswa.store');

Route::prefix('admin')->group(function () {
    Route::get(uri: '/dashboard', action:[DashboardController::class,'index'])->name('admin.dashboard');

    // --- ROUTE PROFILE SEKOLAH ---
    Route::get( '/profile', action:[ProfileSekolahController::class,'index'])->name('admin.profile');
    Route::get( '/profile/edit', action:[ProfileSekolahController::class,'edit'])->name('admin.edit_profile');
    Route::put('/profile/update', action:[ProfileSekolahController::class,'update'])->name('admin.profile.update'); // Ubah ke method 'update'

    Route::get( '/berita', action:[KelolaBeritaController::class,'index'])->name('admin.berita');
    Route::get( '/siswa', action:[KelolaSiswaController::class,'index'])->name('admin.siswa');
    Route::get( '/galeri', action:[KelolaGaleriController::class,'index'])->name('admin.galeri');
    Route::get( '/guru', action:[KelolaGuruController::class,'index'])->name('admin.guru');
    Route::get( '/ekstrakulikuler', action:[KelolaEkstraKuliKulerController::class,'index'])->name('admin.ekstrakulikuler');
});
