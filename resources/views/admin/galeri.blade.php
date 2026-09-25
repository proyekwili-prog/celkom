@extends('public.admin')

@section('title', $title)

@section('content')
<div class="container-fluid px-4 py-4">
    
    <!-- Header / Banner Bagian Atas -->
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h3 class="fw-bold text-dark mb-1">
                <i class="bi bi-images me-2 text-secondary"></i> Kelola Galeri Foto Sekolah
            </h3>
            <p class="text-muted small mb-0">Manajemen dokumentasi foto kegiatan, fasilitas, dan acara resmi SMPN Satu Atap 1 Mangunreja.</p>
        </div>
        <div class="col-md-6 text-md-end mt-3 mt-md-0">
            <!-- Tombol Unggah Foto Baru -->
            <button type="button" class="btn btn-secondary shadow-sm px-3 py-2 d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#uploadGaleriModal">
                <i class="bi bi-cloud-arrow-up-fill"></i> Unggah Foto Baru
            </button>
        </div>
    </div>

    <!-- Statistik Galeri -->
    <div class="row g-3 mb-4">
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 p-3 bg-white d-flex flex-row align-items-center justify-content-between">
                <div>
                    <span class="text-muted small fw-bold text-uppercase d-block mb-1">Total Foto Galeri</span>
                    <h3 class="fw-bold text-dark mb-0">24 Foto</h3>
                </div>
                <div class="p-3 bg-light text-secondary rounded-3 border">
                    <i class="bi bi-collection-fill fs-3"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 p-3 bg-white d-flex flex-row align-items-center justify-content-between">
                <div>
                    <span class="text-muted small fw-bold text-uppercase d-block mb-1">Album Kegiatan</span>
                    <h3 class="fw-bold text-dark mb-0">6 Album</h3>
                </div>
                <div class="p-3 bg-light text-secondary rounded-3 border">
                    <i class="bi bi-folder-fill fs-3"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 p-3 bg-white d-flex flex-row align-items-center justify-content-between">
                <div>
                    <span class="text-muted small fw-bold text-uppercase d-block mb-1">Penyimpanan Digunakan</span>
                    <h3 class="fw-bold text-dark mb-0">45 MB</h3>
                </div>
                <div class="p-3 bg-light text-secondary rounded-3 border">
                    <i class="bi bi-hdd-fill fs-3"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter & Pencarian Album -->
    <div class="card border-0 shadow-sm rounded-4 p-3 mb-4 bg-white">
        <div class="row align-items-center g-3">
            <div class="col-md-8">
                <div class="d-flex flex-wrap gap-2">
                    <button class="btn btn-secondary btn-sm px-3">Semua Foto</button>
                    <button class="btn btn-outline-secondary btn-sm px-3">Kegiatan Sekolah</button>
                    <button class="btn btn-outline-secondary btn-sm px-3">Ekstrakurikuler</button>
                    <button class="btn btn-outline-secondary btn-sm px-3">Fasilitas</button>
                    <button class="btn btn-outline-secondary btn-sm px-3">Prestasi</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Cari keterangan foto...">
                    <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Grid Kartu Galeri Foto -->
    <div class="row g-4">
        <!-- Foto 1 -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=500&auto=format&fit=crop&q=60" class="card-img-top" alt="Upacara Bendera" style="height: 180px; object-fit: cover;">
                    <span class="position-absolute top-0 end-0 m-2 badge bg-secondary bg-opacity-75">Kegiatan Sekolah</span>
                </div>
                <div class="card-body p-3">
                    <h6 class="fw-bold text-dark mb-1">Upacara Bendera Hari Senin</h6>
                    <p class="text-muted small mb-3">Suasana khidmat upacara bendera rutin yang diikuti seluruh siswa dan guru.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted fs-7"><i class="bi bi-calendar3 me-1"></i> 14 Sep 2026</span>
                        <div class="d-flex gap-1">
                            <button class="btn btn-sm btn-outline-secondary border-0" title="Edit"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-sm btn-outline-danger border-0" title="Hapus"><i class="bi bi-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Foto 2 -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=500&auto=format&fit=crop&q=60" class="card-img-top" alt="Gedung Sekolah" style="height: 180px; object-fit: cover;">
                    <span class="position-absolute top-0 end-0 m-2 badge bg-secondary bg-opacity-75">Fasilitas</span>
                </div>
                <div class="card-body p-3">
                    <h6 class="fw-bold text-dark mb-1">Gedung & Halaman Depan</h6>
                    <p class="text-muted small mb-3">Kondisi lingkungan sekolah yang bersih, hijau, dan nyaman untuk belajar.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted fs-7"><i class="bi bi-calendar3 me-1"></i> 01 Sep 2026</span>
                        <div class="d-flex gap-1">
                            <button class="btn btn-sm btn-outline-secondary border-0" title="Edit"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-sm btn-outline-danger border-0" title="Hapus"><i class="bi bi-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Foto 3 -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1529390079861-591de354faf5?w=500&auto=format&fit=crop&q=60" class="card-img-top" alt="Pramuka" style="height: 180px; object-fit: cover;">
                    <span class="position-absolute top-0 end-0 m-2 badge bg-secondary bg-opacity-75">Ekstrakurikuler</span>
                </div>
                <div class="card-body p-3">
                    <h6 class="fw-bold text-dark mb-1">Latihan Pramuka Mingguan</h6>
                    <p class="text-muted small mb-3">Kegiatan pelatihan tali-temali dan baris-berbaris oleh anggota pramuka.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted fs-7"><i class="bi bi-calendar3 me-1"></i> 25 Agu 2026</span>
                        <div class="d-flex gap-1">
                            <button class="btn btn-sm btn-outline-secondary border-0" title="Edit"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-sm btn-outline-danger border-0" title="Hapus"><i class="bi bi-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Foto 4 -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=500&auto=format&fit=crop&q=60" class="card-img-top" alt="Laboratorium" style="height: 180px; object-fit: cover;">
                    <span class="position-absolute top-0 end-0 m-2 badge bg-secondary bg-opacity-75">Fasilitas</span>
                </div>
                <div class="card-body p-3">
                    <h6 class="fw-bold text-dark mb-1">Kegiatan Praktikum Komputer</h6>
                    <p class="text-muted small mb-3">Siswa aktif mengikuti pembelajaran praktik teknologi informasi.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted fs-7"><i class="bi bi-calendar3 me-1"></i> 18 Agu 2026</span>
                        <div class="d-flex gap-1">
                            <button class="btn btn-sm btn-outline-secondary border-0" title="Edit"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-sm btn-outline-danger border-0" title="Hapus"><i class="bi bi-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Paginasi -->
    <nav class="d-flex justify-content-center mt-4">
        <ul class="pagination pagination-sm mb-0">
            <li class="page-item disabled"><a class="page-link" href="#">Sebelumnya</a></li>
            <li class="page-item active"><a class="page-link bg-secondary border-secondary" href="#">1</a></li>
            <li class="page-item"><a class="page-link text-secondary" href="#">2</a></li>
            <li class="page-item"><a class="page-link text-secondary" href="#">Selanjutnya</a></li>
        </ul>
    </nav>

</div>
@endsection