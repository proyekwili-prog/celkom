<?php

namespace App\Http\Controllers;

use App\Models\KelolaSiswa;
use Illuminate\Http\Request;

class KelolaSiswaController extends Controller
{
    
    
    public function index()
    {
        // Ambil semua data siswa dari database
        $siswas = KelolaSiswa::all();

        $data = [
            'title'  => 'Siswa',
            'siswas' => $siswas
        ];

        return view('admin.siswa', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'  => 'required|string|max:255',
            'nisn'  => 'required|string|max:50',
            'kelas' => 'required|string|max:20',
        ]);

        // Simpan data ke database menggunakan Model KelolaSiswa
        KelolaSiswa::create([
            'nama'  => $request->nama,
            'nisn'  => $request->nisn,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('admin.siswa')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(KelolaSiswa $kelolaSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KelolaSiswa $kelolaSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KelolaSiswa $kelolaSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KelolaSiswa $kelolaSiswa)
    {
        //
    }
}