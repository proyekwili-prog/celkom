@extends('public.admin')

@section('title', $title)

@section('content')
<!-- Header Banner & Tombol Kembali ke Dashboard -->
<div class="col-12">
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div>
                <h4 class="mb-1 fw-bold text-dark">Kelola Data Siswa</h4>
                <p class="text-muted mb-0">Tambah, lihat, dan kelola data siswa SMPN Satu Atap 1 Mangunreja.</p>
            </div>
            {{-- <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary btn-sm d-flex align-items-center gap-1">
                <i class="bi bi-arrow-left"></i> Kembali ke Dashboard
            </a> --}}
        </div>
    </div>
</div>

<!-- Form Input Siswa Baru -->
<div class="col-lg-4 mb-4">
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <h5 class="mb-0 fw-bold text-dark fs-6"><i class="bi bi-person-plus me-2 text-secondary"></i>Tambah Siswa Baru</h5>
        </div>
        <div class="card-body">
            <!-- Form action diarahkan ke rute penyimpanan data siswa -->
            <form action="{{ route('admin.siswa.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold small text-muted">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama siswa" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold small text-muted">NISN</label>
                    <input type="text" name="nisn" class="form-control" placeholder="Masukkan NISN" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold small text-muted">Kelas</label>
                    <select name="kelas" class="form-select" required>
                        <option value="">Pilih Kelas</option>
                        <option value="VII">Kelas VII</option>
                        <option value="VIII">Kelas VIII</option>
                        <option value="IX">Kelas IX</option>
                    </select>
                </div>
                <!-- Tombol disesuaikan warnanya menggunakan warna yang senada dengan sidebar -->
                <button type="submit" class="btn text-white w-100" style="background-color: #6c7d93;">
                    <i class="bi bi-save me-1"></i> Simpan Data Siswa
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Tabel Daftar Siswa -->
<div class="col-lg-8">
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <h5 class="mb-0 fw-bold text-dark fs-6"><i class="bi bi-table me-2 text-primary"></i>Daftar Siswa</h5>
            <div class="input-group" style="width: 240px;">
                <input type="text" class="form-control form-control-sm" placeholder="Cari siswa...">
                <button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-search"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-uppercase fs-7">
                        <tr>
                            <th class="ps-3 py-3">No</th>
                            <th class="py-3">Nama Siswa</th>
                            <th class="py-3">NISN</th>
                            <th class="py-3">Kelas</th>
                            <th class="text-end pe-3 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($siswas) && count($siswas) > 0)
                            @foreach($siswas as $s)
                                <tr>
                                    <td class="ps-3">{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="fw-semibold text-dark">{{ $s->nama }}</div>
                                        <small class="text-muted">Siswa Aktif</small>
                                    </td>
                                    <td>{{ $s->nisn }}</td>
                                    <td><span class="badge bg-secondary">{{ $s->kelas }}</span></td>
                                    <td class="text-end pe-3">
                                        <button class="btn btn-sm btn-light text-primary border-0" title="Detail"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-light text-warning border-0" title="Edit"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-light text-danger border-0" title="Hapus"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">Belum ada data siswa.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection