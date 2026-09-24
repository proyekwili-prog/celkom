@extends('admin')

@section('title', 'Profil Sekolah')

@section('content')

<div class="container" style="padding: 30px">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <div>
            <h2 style="margin: 0; color:#18392b;">Profil Sekolah</h2>
            <p style="margin-top: 5px; color: #777;">
                Informasi mengenai identitas sekolah
            </p>
        </div>

        <a href="{{ route('admin.edit_profile') }}" style="background: #3f7657; color: white; padding: 10px 18px; text-decoration: none; border-radius: 5px;">
            Edit Profil
        </a>
    </div>

    <div style="background-color: white; border-radius: 15px; padding: 35px; box-shadow: 0 4px 15px rgba(0,0,0,0.08);">
        <div style="text-align: center; margin-bottom: 25px">
            <img src="{{ asset('assets/images/sakola.png') }}" alt="Logo Sekolah"
            style="width: 130px; height: 130px; object-fit: contain; margin-bottom: 15px;">

            <h2 style="margin: 0; color: #18392b">{{ $profile->nama_sekolah ?? 'SMA CINTAWANA' }}</h2>
            <p style="color: #777; margin-top: 8px;">Sistem Informasi Sekolah</p>
        </div>

        <div style="border-top: 1px solid #e5e5e5; padding-top: 20px">
            <div style="display: grid; grid-template-columns: 180px 1fr; gap: 15px; padding: 12px 0; border-bottom: 1px solid #eee">
                <strong>Nama Sekolah</strong>
                <span>{{ $profile->nama_sekolah ?? '-' }}</span>
            </div>

            <div style="display: grid; grid-template-columns: 180px 1fr; gap: 15px; padding: 12px 0; border-bottom: 1px solid #eee">
                <strong>NPSN</strong>
                <span>{{ $profile->npsn ?? '-' }}</span>
            </div>

            <div style="display: grid; grid-template-columns: 180px 1fr; gap: 15px; padding: 12px 0; border-bottom: 1px solid #eee">
                <strong>Kepala Sekolah</strong>
                <span>{{ $profile->kepala_sekolah ?? '-' }}</span>
            </div>

            <div style="display: grid; grid-template-columns: 180px 1fr; gap: 15px; padding: 12px 0; border-bottom: 1px solid #eee">
                <strong>Tahun Berdiri</strong>
                <span>{{ $profile->tahun_berdiri ?? '-' }}</span>
            </div>

            <div style="display: grid; grid-template-columns: 180px 1fr; gap: 15px; padding: 12px 0; border-bottom: 1px solid #eee">
                <strong>Kontak</strong>
                <span>{{ $profile->kontak ?? '-' }}</span>
            </div>

            <div style="display: grid; grid-template-columns: 180px 1fr; gap: 15px; padding: 12px 0; border-bottom: 1px solid #eee">
                <strong>Alamat</strong>
                <span>{{ $profile->alamat ?? '-' }}</span>
            </div>

            <div style="display: grid; grid-template-columns: 180px 1fr; gap: 15px; padding: 12px 0; border-bottom: 1px solid #eee">
                <strong>Deskripsi</strong>
                <span>{{ $profile->deskripsi ?? '-' }}</span>
            </div>
        </div>
    </div>
</div>
@endsection
