@extends('public.admin')

@section('title', 'Edit Profil Sekolah')

@section('content')

<div class="container" style="padding: 30px">
    <h2 style="color: black; margin-bottom: 5px;">Edit Profil Sekolah</h2>
    <p style="color: #777; margin-bottom: 25px;">Silakan ubah informasi sekolah di bawah ini.</p>

    <!-- max-width diubah menjadi 100% agar melebar full -->
    <div style="background: white; padding: 30px; border-radius: 15px; width: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.08);">

        <form action="{{ route('admin.profile.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 15px;">
                <label style="font-weight: 600; color: #333;">Nama Sekolah</label>
                <input type="text" name="nama_sekolah" value="{{ old('nama_sekolah', $profile->nama_sekolah ?? '') }}" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 6px;" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="font-weight: 600; color: #333;">NPSN</label>
                <input type="text" name="npsn" value="{{ old('npsn', $profile->npsn ?? '') }}" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 6px;" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="font-weight: 600; color: #333;">Kepala Sekolah</label>
                <input type="text" name="kepala_sekolah" value="{{ old('kepala_sekolah', $profile->kepala_sekolah ?? '') }}" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="font-weight: 600; color: #333;">Tahun Berdiri</label>
                <input type="text" name="tahun_berdiri" value="{{ old('tahun_berdiri', $profile->tahun_berdiri ?? '') }}" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="font-weight: 600; color: #333;">Kontak</label>
                <input type="text" name="kontak" value="{{ old('kontak', $profile->kontak ?? '') }}" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 6px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="font-weight: 600; color: #333;">Alamat</label>
                <textarea name="alamat" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 6px;" rows="3" required>{{ old('alamat', $profile->alamat ?? '') }}</textarea>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="font-weight: 600; color: #333;">Deskripsi</label>
                <textarea name="deskripsi" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 6px;" rows="4">{{ old('deskripsi', $profile->deskripsi ?? '') }}</textarea>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="font-weight: 600; color: #333;">Visi</label>
                <textarea name="visi" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 6px;" rows="3" placeholder="Masukkan visi sekolah...">{{ old('visi', $profile->visi ?? '') }}</textarea>
            </div>

            <!-- Tambahan Misi -->
            <!-- Bagian Misi di edit_profil.blade.php -->
<div style="margin-bottom: 20px;">
    <label style="font-weight: 600; color: #333;">Misi</label>
    <textarea name="misi" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 6px;" rows="5" placeholder="Masukkan misi sekolah...">{{ old('misi', $profile->misi ?? '') }}</textarea>
</div>

            <button type="submit" style="background: #6c757d; color: white; border: none; padding: 10px 22px; border-radius: 7px; cursor: pointer; font-weight: 600;">Simpan</button>
            <a href="{{ route('admin.profile') }}" style="margin-left: 10px; text-decoration: none; color: #555;">Batal</a>
        </form>
    </div>
</div>
@endsection
