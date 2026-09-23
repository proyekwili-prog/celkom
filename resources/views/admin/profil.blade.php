@extends('admin')

@section('title', 'Profil Sekolah')

@section('content')

<div class="container-fluid">

    {{-- Judul Halaman --}}
    <div class="mb-4">
        <h3 class="fw-bold mb-1">Profil Sekolah</h3>
        <p class="text-muted mb-0">
            Informasi lengkap mengenai sekolah
        </p>
    </div>


    {{-- Header Sekolah --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4">

            <div class="d-flex align-items-center">

                {{-- Logo / Foto Sekolah --}}
                <div class="me-4">
                    <img src="{{ asset('assets/images/profile.png') }}"
                         alt="Logo Sekolah"
                         style="
                            width: 110px;
                            height: 110px;
                            object-fit: cover;
                            border-radius: 12px;
                            border: 1px solid #ddd;
                         ">
                </div>

                {{-- Nama Sekolah --}}
                <div>
                    <h3 class="fw-bold mb-2">
                        SMA CINTAWANA
                    </h3>

                    <p class="text-muted mb-1">
                        Sekolah Menengah Atas
                    </p>

                    <span class="badge bg-primary">
                        NPSN : 12345678
                    </span>
                </div>

            </div>

        </div>
    </div>


    {{-- Informasi Sekolah --}}
    <div class="card border-0 shadow-sm mb-4">

        <div class="card-body p-4">

            <h5 class="fw-bold mb-4">
                <i class="bi bi-building me-2"></i>
                Informasi Sekolah
            </h5>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="text-muted small">
                        Nama Sekolah
                    </label>

                    <div class="fw-semibold">
                        SMA CINTAWANA
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <label class="text-muted small">
                        NPSN
                    </label>

                    <div class="fw-semibold">
                        12345678
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <label class="text-muted small">
                        Jenjang
                    </label>

                    <div class="fw-semibold">
                        SMA
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <label class="text-muted small">
                        Status Sekolah
                    </label>

                    <div class="fw-semibold">
                        Negeri
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <label class="text-muted small">
                        Akreditasi
                    </label>

                    <div class="fw-semibold">
                        A
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <label class="text-muted small">
                        Kepala Sekolah
                    </label>

                    <div class="fw-semibold">
                        Nama Kepala Sekolah
                    </div>
                </div>


                <div class="col-md-12 mb-3">
                    <label class="text-muted small">
                        Alamat
                    </label>

                    <div class="fw-semibold">
                        Jl. Contoh No. 123, Tasikmalaya
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <label class="text-muted small">
                        No. Telepon
                    </label>

                    <div class="fw-semibold">
                        081234567890
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <label class="text-muted small">
                        Email
                    </label>

                    <div class="fw-semibold">
                        info@sekolah.sch.id
                    </div>
                </div>

            </div>

        </div>

    </div>


    {{-- Visi dan Misi --}}
    <div class="row">

        {{-- Visi --}}
        <div class="col-md-6 mb-4">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-eye me-2"></i>
                        Visi
                    </h5>

                    <p class="text-muted mb-0">
                        Menjadi sekolah yang unggul dalam prestasi,
                        berkarakter, berwawasan lingkungan, serta
                        menghasilkan peserta didik yang kompeten
                        dan berakhlak mulia.
                    </p>

                </div>

            </div>

        </div>


        {{-- Misi --}}
        <div class="col-md-6 mb-4">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-list-check me-2"></i>
                        Misi
                    </h5>

                    <ol class="text-muted ps-3 mb-0">

                        <li class="mb-2">
                            Meningkatkan kualitas pembelajaran.
                        </li>

                        <li class="mb-2">
                            Mengembangkan potensi peserta didik.
                        </li>

                        <li class="mb-2">
                            Membentuk karakter siswa yang disiplin.
                        </li>

                        <li>
                            Meningkatkan prestasi akademik dan non-akademik.
                        </li>

                    </ol>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection