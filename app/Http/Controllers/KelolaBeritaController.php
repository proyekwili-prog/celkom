<?php

namespace App\Http\Controllers;

use App\Models\KelolaBerita;
use Illuminate\Http\Request;

class KelolaBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Berita'
        ];

        return view ('admin.berita', $data);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KelolaBerita $kelolaBerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KelolaBerita $kelolaBerita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KelolaBerita $kelolaBerita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KelolaBerita $kelolaBerita)
    {
        //
    }
}
