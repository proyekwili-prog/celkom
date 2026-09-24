<?php

namespace App\Http\Controllers;

use App\Models\ProfileSekolah;
use Illuminate\Http\Request;

class ProfileSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data profil pertama dari database
        $profile = ProfileSekolah::first();

        $data = [
            'title' => 'Profil Sekolah',
            'profile' => $profile
        ];

        return view('admin.profil', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $profile = ProfileSekolah::first();

        $data = [
            'title' => 'Edit Profil',
            'profile' => $profile
        ];

        return view("admin.edit_profil", $data);
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request)
{
    $request->validate([
        'nama_sekolah'   => 'required|string|max:255',
        'npsn'           => 'required|string|max:50',
        'alamat'         => 'required|string',
        'kepala_sekolah' => 'nullable|string|max:255',
        'tahun_berdiri'  => 'nullable|string|max:10',
        'kontak'         => 'nullable|string|max:100',
        'deskripsi'      => 'nullable|string',
    ]);

    // Mengambil data profil pertama, jika tidak ada buat baru
    $profile = ProfileSekolah::first();

    if (!$profile) {
        $profile = new ProfileSekolah();
    }

    $profile->nama_sekolah   = $request->nama_sekolah;
    $profile->npsn           = $request->npsn;
    $profile->alamat         = $request->alamat;
    $profile->kepala_sekolah = $request->kepala_sekolah;
    $profile->tahun_berdiri  = $request->tahun_berdiri;
    $profile->kontak         = $request->kontak;
    $profile->deskripsi      = $request->deskripsi;

    $profile->save();

    return redirect()
        ->route('admin.profile')
        ->with('success', 'Profil berhasil diperbarui!');
}
}
