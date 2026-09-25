@extends('public.admin')

@section('title', $title)

@section('content')
<div class="container-fluid px-4 py-4">
    
    <!-- Header / Banner Bagian Atas -->
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h3 class="fw-bold text-dark mb-1">
                <i class="bi bi-journal-text me-2 text-secondary"></i> Kelola Berita & Informasi Sekolah
            </h3>
            <p class="text-muted small mb-0">Manajemen pengumuman, artikel kegiatan, dan berita resmi SMPN Satu Atap 1 Mangunreja.</p>
        </div>
        <div class="col-md-6 text-md-end mt-3 mt-md-0">
            <!-- Tombol Tambah Berita Baru -->
            <button type="button" class="btn btn-secondary shadow-sm px-3 py-2 d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#tambahBeritaModal">
                <i class="bi bi-plus-circle-fill"></i> Tambah Berita Baru
            </button>
        </div>
    </div>

    <!-- Statistik Berita -->
    <div class="row g-3 mb-4">
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 p-3 bg-white d-flex flex-row align-items-center justify-content-between">
                <div>
                    <span class="text-muted small fw-bold text-uppercase d-block mb-1">Total Artikel Berita</span>
                    <h3 class="fw-bold text-dark mb-0">8 Artikel</h3>
                </div>
                <div class="p-3 bg-light text-secondary rounded-3 border">
                    <i class="bi bi-newspaper fs-3"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 p-3 bg-white d-flex flex-row align-items-center justify-content-between">
                <div>
                    <span class="text-muted small fw-bold text-uppercase d-block mb-1">Terpublikasi</span>
                    <h3 class="fw-bold text-dark mb-0">6 Artikel</h3>
                </div>
                <div class="p-3 bg-light text-secondary rounded-3 border">
                    <i class="bi bi-check-circle-fill fs-3"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 p-3 bg-white d-flex flex-row align-items-center justify-content-between">
                <div>
                    <span class="text-muted small fw-bold text-uppercase d-block mb-1">Draft / Arsip</span>
                    <h3 class="fw-bold text-dark mb-0">2 Artikel</h3>
                </div>
                <div class="p-3 bg-light text-secondary rounded-3 border">
                    <i class="bi bi-file-earmark-text-fill fs-3"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Daftar Berita -->
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
        <div class="card-header bg-white py-3 px-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="fw-bold text-dark m-0"><i class="bi bi-table me-2 text-secondary"></i> Daftar Berita & Pengumuman</h5>
            <div class="input-group" style="width: 250px;">
                <input type="text" class="form-control form-control-sm" placeholder="Cari judul berita...">
                <button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-search"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-uppercase fs-7 text-secondary">
                        <tr>
                            <th class="py-3 px-4" style="width: 5%;">No</th>
                            <th class="py-3 px-4">Judul & Gambar</th>
                            <th class="py-3 px-4">Kategori</th>
                            <th class="py-3 px-4">Penulis & Tanggal</th>
                            <th class="py-3 px-4 text-center">Status</th>
                            <th class="py-3 px-4 text-center" style="width: 15%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Berita 1 -->
                        <tr>
                            <td class="px-4 fw-semibold text-secondary">1</td>
                            <td class="px-4">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=100&auto=format&fit=crop&q=60" alt="Thumbnail" class="rounded-3 border" style="width: 60px; height: 45px; object-fit: cover;">
                                    <div>
                                        <span class="fw-bold text-dark d-block text-truncate" style="max-width: 250px;">Upacara Peringatan Hari Kemerdekaan RI di Sekolah</span>
                                        <span class="text-muted small">Kegiatan khidmat bersama seluruh guru dan siswa...</span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4">
                                <span class="badge bg-light text-secondary border px-2 py-1">Kegiatan Sekolah</span>
                            </td>
                            <td class="px-4">
                                <span class="fw-semibold text-dark d-block">Admin Sekolah</span>
                                <span class="text-muted small">17 Agustus 2026</span>
                            </td>
                            <td class="px-4 text-center">
                                <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">Published</span>
                            </td>
                            <td class="px-4 text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <button class="btn btn-sm btn-outline-secondary" title="Lihat"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-sm btn-outline-danger" title="Hapus"><i class="bi bi-trash"></i></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Berita 2 -->
                        <tr>
                            <td class="px-4 fw-semibold text-secondary">2</td>
                            <td class="px-4">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?w=100&auto=format&fit=crop&q=60" alt="Thumbnail" class="rounded-3 border" style="width: 60px; height: 45px; object-fit: cover;">
                                    <div>
                                        <span class="fw-bold text-dark d-block text-truncate" style="max-width: 250px;">Penerimaan Rapor Semester Ganjil Tahun Ajaran</span>
                                        <span class="text-muted small">Informasi pembagian hasil belajar siswa...</span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4">
                                <span class="badge bg-light text-secondary border px-2 py-1">Pengumuman</span>
                            </td>
                            <td class="px-4">
                                <span class="fw-semibold text-dark d-block">Asep Mulyana, S.Pd.</span>
                                <span class="text-muted small">10 September 2026</span>
                            </td>
                            <td class="px-4 text-center">
                                <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">Published</span>
                            </td>
                            <td class="px-4 text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <button class="btn btn-sm btn-outline-secondary" title="Lihat"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-sm btn-outline-danger" title="Hapus"><i class="bi bi-trash"></i></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Berita 3 -->
                        <tr>
                            <td class="px-4 fw-semibold text-secondary">3</td>
                            <td class="px-4">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=100&auto=format&fit=crop&q=60" alt="Thumbnail" class="rounded-3 border" style="width: 60px; height: 45px; object-fit: cover;">
                                    <div>
                                        <span class="fw-bold text-dark d-block text-truncate" style="max-width: 250px;">Tim Voli Sekolah Berhasil Meraih Juara 2 Kabupaten</span>
                                        <span class="text-muted small">Prestasi membanggakan dari ekstrakurikuler voli...</span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4">
                                <span class="badge bg-light text-secondary border px-2 py-1">Prestasi</span>
                            </td>
                            <td class="px-4">
                                <span class="fw-semibold text-dark d-block">Rudi Hartono, S.Or.</span>
                                <span class="text-muted small">22 September 2026</span>
                            </td>
                            <td class="px-4 text-center">
                                <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle px-2 py-1">Draft</span>
                            </td>
                            <td class="px-4 text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <button class="btn btn-sm btn-outline-secondary" title="Lihat"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-outline-secondary" title="Edit"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-sm btn-outline-danger" title="Hapus"><i class="bi bi-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer Tabel / Paginasi -->
        <div class="card-footer bg-white py-3 px-4 d-flex justify-content-between align-items-center border-0">
            <span class="text-muted small">Menampilkan artikel berita aktif</span>
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item disabled"><a class="page-link" href="#">Sebelumnya</a></li>
                    <li class="page-item active"><a class="page-link bg-secondary border-secondary" href="#">1</a></li>
                    <li class="page-item"><a class="page-link text-secondary" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-secondary" href="#">Selanjutnya</a></li>
                </ul>
            </nav>
        </div>
    </div>

</div>
@endsection