@extends('public.admin')

@section('content')
<div class="container-fluid px-4 py-4">
    
    <!-- Header / Banner Sambutan -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #6c757d 0%, #6c757d 100%); border-radius: 16px;">
                <div class="card-body p-4 p-md-5">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <span class="badge bg-light text-dark fw-semibold px-3 py-2 mb-3 rounded-pill" style="font-size: 12px; letter-spacing: 0.5px;">
                                <i class="bi bi-shield-lock-fill me-1 text-secondary"></i> PANEL ADMINISTRATOR
                            </span>
                            <h1 class="fw-bold fs-2 mb-2">Selamat Datang, {{ Auth::user()->name ?? 'Administrator' }}! 👋</h1>
                            <p class="text-white-50 mb-0" style="font-size: 15px; line-height: 1.6;">
                                Kelola seluruh data informasi SMPN Satu Atap 1 Mangunreja mulai dari profil, guru, siswa, berita, ekstrakurikuler, hingga galeri sekolah dengan mudah dan terpusat di sini.
                            </p>
                        </div>
                        <div class="col-lg-4 text-end d-none d-lg-block ms-auto">
                    <div class="p-3 bg-white bg-opacity-10 rounded-circle d-inline-block shadow-inner">
                       <img src="{{ asset('assets/images/satap.png') }}" alt="Logo Sekolah" style="max-height: 110px; object-fit: contain; filter: drop-shadow(0px 4px 6px rgba(0,0,0,0.3));">
                         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <h5 class="fw-bold text-dark m-0">
                <i class="bi bi-grid-fill me-2 text-secondary"></i> Ringkasan Data Menu Utama
            </h5>
            <p class="text-muted small m-0">Statistik cepat dari sistem pengelolaan data sekolah.</p>
        </div>
    </div>
    <div class="row g-3 mb-4">
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm h-100 hover-shadow transition-all" style="border-radius: 14px; border-left: 5px solid #495057 !important;">
                <div class="card-body p-4 d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted d-block small fw-bold text-uppercase mb-1" style="letter-spacing: 0.5px;">Kelola Guru</span>
                        <h3 class="fw-bold text-dark mb-0">12</h3>
                        <span class="text-success small fw-semibold"><i class="bi bi-arrow-up-right"></i> Data Aktif</span>
                    </div>
                    <div class="p-3 rounded-4 text-secondary bg-light" style="background-color: rgba(73, 80, 87, 0.1) !important;">
                        <i class="bi bi-person-badge fs-2"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kelola Siswa (Dinamis dari Database) -->
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm h-100 hover-shadow transition-all" style="border-radius: 14px; border-left: 5px solid #495057 !important;">
                <div class="card-body p-4 d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted d-block small fw-bold text-uppercase mb-1" style="letter-spacing: 0.5px;">Kelola Siswa</span>
                        <h3 class="fw-bold text-dark mb-0">{{ $totalSiswa ?? 0 }}</h3>
                        <span class="text-success small fw-semibold"><i class="bi bi-arrow-up-right"></i> Data Aktif</span>
                    </div>
                    <div class="p-3 rounded-4 text-secondary bg-light" style="background-color: rgba(73, 80, 87, 0.1) !important;">
                        <i class="bi bi-people fs-2"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kelola Ekstrakurikuler -->
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm h-100 hover-shadow transition-all" style="border-radius: 14px; border-left: 5px solid #495057 !important;">
                <div class="card-body p-4 d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted d-block small fw-bold text-uppercase mb-1" style="letter-spacing: 0.5px;">Ekstrakurikuler</span>
                        <h3 class="fw-bold text-dark mb-0">5</h3>
                        <span class="text-success small fw-semibold"><i class="bi bi-arrow-up-right"></i> Kegiatan Aktif</span>
                    </div>
                    <div class="p-3 rounded-4 text-secondary bg-light" style="background-color: rgba(73, 80, 87, 0.1) !important;">
                        <i class="bi bi-trophy fs-2"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kelola Berita -->
        <div class="col-xl-6 col-md-6">
            <div class="card border-0 shadow-sm h-100 hover-shadow transition-all" style="border-radius: 14px; border-left: 5px solid #495057 !important;">
                <div class="card-body p-4 d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted d-block small fw-bold text-uppercase mb-1" style="letter-spacing: 0.5px;">Kelola Berita & Informasi</span>
                        <h3 class="fw-bold text-dark mb-0">8</h3>
                        <span class="text-muted small">Artikel terpublikasi</span>
                    </div>
                    <div class="p-3 rounded-4 text-secondary bg-light" style="background-color: rgba(73, 80, 87, 0.1) !important;">
                        <i class="bi bi-journal-text fs-2"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kelola Galeri -->
        <div class="col-xl-6 col-md-12">
            <div class="card border-0 shadow-sm h-100 hover-shadow transition-all" style="border-radius: 14px; border-left: 5px solid #495057 !important;">
                <div class="card-body p-4 d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted d-block small fw-bold text-uppercase mb-1" style="letter-spacing: 0.5px;">Kelola Galeri Foto</span>
                        <h3 class="fw-bold text-dark mb-0">24</h3>
                        <span class="text-muted small">Dokumentasi kegiatan</span>
                    </div>
                    <div class="p-3 rounded-4 text-secondary bg-light" style="background-color: rgba(73, 80, 87, 0.1) !important;">
                        <i class="bi bi-images fs-2"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection