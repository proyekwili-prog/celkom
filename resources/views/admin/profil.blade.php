@extends('admin')

@section('title', 'Profil Sekolah')

@section('content')

<div class="container" style="padding: 30px; max-width: 1200px;">

    <!-- Header Halaman & Tombol Edit -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <div>
            <h2 style="margin: 0; color: #18392b; font-weight: 700;">Profil Sekolah</h2>
            <p style="margin-top: 5px; color: #777; font-size: 14px;">
                Kelola informasi identitas dan profil resmi sekolah
            </p>
        </div>

        <a href="{{ route('admin.edit_profile') }}" style="background: #3f7657; color: white; padding: 10px 20px; text-decoration: none; border-radius: 8px; font-weight: 600; box-shadow: 0 4px 10px rgba(63, 118, 87, 0.2); display: flex; align-items: center; gap: 8px; transition: 0.2s;">
            <i class="bi bi-pencil-square"></i> Edit Profil
        </a>
    </div>

    <!-- Layout Utama: 2 Kolom (Kiri: Identitas & Foto, Kanan: Detail Data) -->
    <div style="display: grid; grid-template-columns: 320px 1fr; gap: 25px; align-items: start;">

        <!-- ================= KOLOM KIRI ================= -->
        <div style="display: flex; flex-direction: column; gap: 20px;">

            <!-- Kartu Logo & Nama -->
            <div style="background-color: white; border-radius: 16px; padding: 30px 20px; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border: 1px solid #e2e8f0;">
                <div style="width: 90px; height: 90px; background: #f8fafc; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px auto; box-shadow: 0 4px 10px rgba(0,0,0,0.05); padding: 8px; border: 1px solid #e2e8f0;">
                    <img src="{{ asset('assets/images/sakola.png') }}" alt="Logo Sekolah" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
                <h3 style="margin: 0; font-weight: 700; font-size: 18px; color: #18392b;">{{ $profile->nama_sekolah ?? 'SMA CINTAWANA' }}</h3>
                <p style="color: #64748b; font-size: 13px; margin-top: 5px; margin-bottom: 0;">Sistem Informasi Sekolah</p>
            </div>

            <!-- Kartu Foto Gedung/Halaman Sekolah -->
            <div style="background-color: white; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border: 1px solid #e2e8f0;">
                <div style="padding: 14px 20px; border-bottom: 1px solid #f1f5f9; font-weight: 600; font-size: 14px; color: #18392b; background: #f8fafc; display: flex; align-items: center; gap: 8px;">
                    {{--  <i class="bi bi-image" style="color: #3f7657;"></i> Foto Sekolah  --}}
                </div>
                <div style="width: 100%; height: 190px; background: #e2e8f0;">
                    <img src="{{ asset('assets/images/smacinta.png') }}" alt="Gedung Sekolah" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>

        </div>

        <!-- ================= KOLOM KANAN ================= -->
        <div style="background-color: white; border-radius: 16px; padding: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border: 1px solid #e2e8f0;">

            <h4 style="margin-top: 0; margin-bottom: 20px; font-size: 16px; font-weight: 700; color: #18392b; border-bottom: 2px solid #f1f5f9; padding-bottom: 12px;">
                Informasi Detail Sekolah
            </h4>

            <!-- Grid 4 Kotak Kecil Atribut Utama -->
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">

                <div style="background: #f8fafc; padding: 16px; border-radius: 12px; border: 1px solid #e2e8f0;">
                    <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; color: #64748b; font-weight: 600; display: block; margin-bottom: 4px;">NPSN</span>
                    <span style="font-size: 15px; font-weight: 600; color: #1e293b;">{{ $profile->npsn ?? '-' }}</span>
                </div>

                <div style="background: #f8fafc; padding: 16px; border-radius: 12px; border: 1px solid #e2e8f0;">
                    <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; color: #64748b; font-weight: 600; display: block; margin-bottom: 4px;">Kepala Sekolah</span>
                    <span style="font-size: 15px; font-weight: 600; color: #1e293b;">{{ $profile->kepala_sekolah ?? '-' }}</span>
                </div>

                <div style="background: #f8fafc; padding: 16px; border-radius: 12px; border: 1px solid #e2e8f0;">
                    <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; color: #64748b; font-weight: 600; display: block; margin-bottom: 4px;">Tahun Berdiri</span>
                    <span style="font-size: 15px; font-weight: 600; color: #1e293b;">{{ $profile->tahun_berdiri ?? '-' }}</span>
                </div>

                <div style="background: #f8fafc; padding: 16px; border-radius: 12px; border: 1px solid #e2e8f0;">
                    <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; color: #64748b; font-weight: 600; display: block; margin-bottom: 4px;">Kontak</span>
                    <span style="font-size: 15px; font-weight: 600; color: #1e293b;">{{ $profile->kontak ?? '-' }}</span>
                </div>

            </div>

            <!-- Bagian Teks Panjang (Alamat, Deskripsi, Visi, Misi) -->
            <div style="display: flex; flex-direction: column; gap: 16px;">

                <div style="padding: 14px 18px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px;">
                    <strong style="color: #64748b; display: block; margin-bottom: 4px; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px;">Alamat Lengkap</strong>
                    <span style="color: #1e293b; font-size: 14px; line-height: 1.6; white-space: pre-line;">{{ $profile->alamat ?? '-' }}</span>
                </div>

                <div style="padding: 14px 18px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px;">
                    <strong style="color: #64748b; display: block; margin-bottom: 4px; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px;">Deskripsi Sekolah</strong>
                    <span style="color: #1e293b; font-size: 14px; line-height: 1.6; white-space: pre-line;">{{ $profile->deskripsi ?? '-' }}</span>
                </div>

                <div style="padding: 14px 18px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px;">
                    <strong style="color: #64748b; display: block; margin-bottom: 4px; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px;">Visi</strong>
                    <span style="color: #1e293b; font-size: 14px; line-height: 1.6; white-space: pre-line;">{{ $profile->visi ?? '-' }}</span>
                </div>

                <div style="padding: 14px 18px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px;">
                    <strong style="color: #64748b; display: block; margin-bottom: 4px; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px;">Misi</strong>
                    <span style="color: #1e293b; font-size: 14px; line-height: 1.6; white-space: pre-line;">{{ $profile->misi ?? '-' }}</span>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection
