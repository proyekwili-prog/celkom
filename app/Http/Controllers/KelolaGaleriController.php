<?php

namespace App\Http\Controllers;

use App\Models\KelolaGaleri;
use Illuminate\Http\Request;

class KelolaGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = [
            'title' => 'Galeri'
        ];

        return view ('admin.galeri', $data);
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
    public function show(KelolaGaleri $kelolaGaleri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KelolaGaleri $kelolaGaleri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KelolaGaleri $kelolaGaleri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KelolaGaleri $kelolaGaleri)
    {
        //
    }
}
