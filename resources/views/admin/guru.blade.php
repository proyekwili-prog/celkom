    @extends('public.admin')

    @section('title', $title)

    @section('content')
    <div class="container-fluid px-4 py-4">
        
        <!-- Header / Banner Bagian Atas -->
        <div class="row mb-4 align-items-center">
            <div class="col-md-6">
                <h3 class="fw-bold text-dark mb-1">
                    <i class="bi bi-person-badge-fill me-2 text-secondary"></i> Kelola Data Guru & Staf
                </h3>
                <p class="text-muted small mb-0">Manajemen data tenaga pendidik dan kependidikan resmi SMPN Satu Atap 1 Mangunreja.</p>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <!-- Tombol Tambah Data Guru -->
                <button type="button" class="btn btn-secondary shadow-sm px-3 py-2 d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#tambahGuruModal">
                    <i class="bi bi-person-plus-fill"></i> Tambah Data Guru
                </button>
            </div>
        </div>

        <!-- Notifikasi Sukses -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Statistik Singkat Guru (Dinamis) -->
        <div class="row g-3 mb-4">
            <div class="col-xl-4 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 p-3 bg-white d-flex flex-row align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-bold text-uppercase d-block mb-1">Total Guru & Staf</span>
                        <h3 class="fw-bold text-dark mb-0">{{ $totalGuru ?? 0 }} Orang</h3>
                    </div>
                    <div class="p-3 bg-light text-secondary rounded-3 border">
                        <i class="bi bi-people-fill fs-3"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 p-3 bg-white d-flex flex-row align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-bold text-uppercase d-block mb-1">Guru PNS / PPPK</span>
                        <h3 class="fw-bold text-dark mb-0">{{ $pnsCount ?? 0 }} Orang</h3>
                    </div>
                    <div class="p-3 bg-light text-secondary rounded-3 border">
                        <i class="bi bi-award-fill fs-3"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 p-3 bg-white d-flex flex-row align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-bold text-uppercase d-block mb-1">Guru Honorer / GTT</span>
                        <h3 class="fw-bold text-dark mb-0">{{ $honorerCount ?? 0 }} Orang</h3>
                    </div>
                    <div class="p-3 bg-light text-secondary rounded-3 border">
                        <i class="bi bi-person-check-fill fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Daftar Guru -->
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
            <div class="card-header bg-white py-3 px-4 border-0 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold text-dark m-0"><i class="bi bi-table me-2 text-secondary"></i> Daftar Tenaga Pendidik</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light text-uppercase fs-7 text-secondary">
                            <tr>
                                <th class="py-3 px-4" style="width: 5%;">No</th>
                                <th class="py-3 px-4">Nama & NIP</th>
                                <th class="py-3 px-4">Mata Pelajaran</th>
                                <th class="py-3 px-4">Jabatan / Tugas Tambahan</th>
                                <th class="py-3 px-4 text-center" style="width: 15%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($gurus as $index => $guru)
                            <tr>
                                <td class="px-4 fw-semibold text-secondary">{{ $index + 1 }}</td>
                                <td class="px-4">
                                    <div class="d-flex align-items-center gap-3">
                                        @if($guru->foto)
                                            <img src="{{ asset('storage/' . $guru->foto) }}" alt="Foto Guru" class="rounded-circle border" style="width: 40px; height: 40px; object-fit: cover;">
                                        @else
                                            <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold border" style="width: 40px; height: 40px;">
                                                {{ substr($guru->nama, 0, 1) }}
                                            </div>
                                        @endif
                                        <div>
                                            <span class="fw-bold text-dark d-block">{{ $guru->nama }}</span>
                                            <span class="text-muted small">NIP. {{ $guru->nip ?? '-' }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 text-secondary">{{ $guru->mata_pelajaran }}</td>
                                <td class="px-4">
                                    <span class="badge bg-light text-secondary border px-2 py-1">{{ $guru->jabatan }}</span>
                                    <span class="badge bg-secondary-subtle text-secondary small d-block mt-1 w-50">{{ $guru->jenis }}</span>
                                </td>
                                <td class="px-4 text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <!-- Tombol Edit Trigger Modal -->
                                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editGuruModal{{ $guru->id }}" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        
                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('admin.guru.destroy', $guru->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            <!-- MODAL EDIT GURU -->
                            <div class="modal fade" id="editGuruModal{{ $guru->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content rounded-4 border-0 shadow">
                                        <form action="{{ route('admin.guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header border-0 pb-0">
                                                <h5 class="fw-bold">Edit Data Guru</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                <div class="mb-3">
                                                    <label class="form-label small fw-bold">Nama Lengkap & Gelar</label>
                                                    <input type="text" class="form-control" name="nama" value="{{ $guru->nama }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label small fw-bold">NIP</label>
                                                    <input type="text" class="form-control" name="nip" value="{{ $guru->nip }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label small fw-bold">Mata Pelajaran</label>
                                                    <input type="text" class="form-control" name="mata_pelajaran" value="{{ $guru->mata_pelajaran }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label small fw-bold">Jabatan / Tugas Tambahan</label>
                                                    <input type="text" class="form-control" name="jabatan" value="{{ $guru->jabatan }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label small fw-bold">Status Kepegawaian</label>
                                                    <select class="form-select" name="jenis" required>
                                                        <option value="PNS / PPPK" {{ $guru->jenis == 'PNS / PPPK' ? 'selected' : '' }}>PNS / PPPK</option>
                                                        <option value="Honorer / GTT" {{ $guru->jenis == 'Honorer / GTT' ? 'selected' : '' }}>Honorer / GTT</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label small fw-bold">Foto Guru (Opsional)</label>
                                                    <input type="file" class="form-control" name="foto">
                                                </div>
                                            </div>
                                            <div class="modal-footer border-0 pt-0">
                                                <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-secondary rounded-pill px-4">Simpan Perubahan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">Belum ada data guru yang ditambahkan.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- MODAL TAMBAH GURU BARU -->
    <div class="modal fade" id="tambahGuruModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content rounded-4 border-0 shadow">
                <form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header border-0 pb-0">
                        <h5 class="fw-bold">Tambah Data Guru Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body text-start">
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Nama Lengkap & Gelar</label>
                            <input type="text" class="form-control" name="nama" placeholder="Contoh: Budi Santoso, S.Pd." required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">NIP (Kosongkan jika Honorer)</label>
                            <input type="text" class="form-control" name="nip" placeholder="Nomor Induk Pegawai">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Mata Pelajaran</label>
                            <input type="text" class="form-control" name="mata_pelajaran" placeholder="Contoh: Matematika" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Jabatan / Tugas Tambahan</label>
                            <input type="text" class="form-control" name="jabatan" placeholder="Contoh: Wali Kelas VII" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Status Kepegawaian</label>
                            <select class="form-select" name="jenis" required>
                                <option value="PNS / PPPK">PNS / PPPK</option>
                                <option value="Honorer / GTT" selected>Honorer / GTT</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Foto Guru</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-secondary rounded-pill px-4">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection