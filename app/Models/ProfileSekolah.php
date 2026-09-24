<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileSekolah extends Model
{
    // UBAH BARIS INI:
    protected $table = 'profile_sekolahs'; // <-- gunakan huruf kecil semua & bentuk jamak 's'

    protected $primaryKey = 'id_profil'; // jika di migration primary key-nya id_profil

    protected $fillable = [
        'nama_sekolah',
        'kepala_sekolah',
        'foto',
        'logo',
        'npsn',
        'alamat',
        'kontak',
        'visi_misi',
        'tahun_berdiri',
        'deskripsi',
        'visi',
        'misi',
    ];
}
