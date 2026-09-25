<?php

namespace App\Http\Controllers;

use App\Models\KelolaSiswa; // 1. Tambahkan baris ini untuk memanggil Model KelolaSiswa
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 2. Hitung jumlah total data siswa dari database
        $totalSiswa = KelolaSiswa::count();

        // 3. Masukkan ke dalam array data untuk dikirim ke view
        $data = [
            'title' => 'Dashboard',
            'totalSiswa' => $totalSiswa,
        ];

        return view('admin.dashboard', $data);
    }

    public function indexPublic()
    {
        return view('public.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}