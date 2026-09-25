<?php

namespace App\Http\Controllers;

use App\Models\KelolaGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KelolaGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = KelolaGuru::all();
        $totalGuru = KelolaGuru::count();
        $pnsCount = KelolaGuru::where('jenis', 'PNS / PPPK')->count();
        $honorerCount = KelolaGuru::where('jenis', 'Honorer / GTT')->count();

        $data = [
            'title' => 'Guru',
            'gurus' => $gurus,
            'totalGuru' => $totalGuru,
            'pnsCount' => $pnsCount,
            'honorerCount' => $honorerCount
        ];

        return view('admin.guru', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|string|max:50',
            'mata_pelajaran' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'jenis' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('foto-guru', 'public');
        }

        KelolaGuru::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'mata_pelajaran' => $request->mata_pelajaran,
            'jabatan' => $request->jabatan,
            'jenis' => $request->jenis,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, $id)
    {
        $guru = KelolaGuru::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|string|max:50',
            'mata_pelajaran' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'jenis' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($guru->foto && Storage::disk('public')->exists($guru->foto)) {
                Storage::disk('public')->delete($guru->foto);
            }
            $guru->foto = $request->file('foto')->store('foto-guru', 'public');
        }

        $guru->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'mata_pelajaran' => $request->mata_pelajaran,
            'jabatan' => $request->jabatan,
            'jenis' => $request->jenis,
            'foto' => $guru->foto,
        ]);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui!');
    }
   
            
    public function destroy($id)
    {
        $guru = KelolaGuru::findOrFail($id);
        
        if ($guru->foto && Storage::disk('public')->exists($guru->foto)) {
            Storage::disk('public')->delete($guru->foto);
        }
        
        $guru->delete();

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil dihapus!');
    }
}