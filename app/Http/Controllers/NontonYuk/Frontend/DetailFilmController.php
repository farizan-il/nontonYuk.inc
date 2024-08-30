<?php

namespace App\Http\Controllers\NontonYuk\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DaftarFilm;
use App\Models\JadwalTayang;
use Illuminate\Http\Request;

class DetailFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function show(string $id)
    {
        $detailfilm = DaftarFilm::with('dimulai.teater.bioskop.kategori')->findOrFail($id);
        $query = JadwalTayang::with('film', 'teater.bioskop.lokasi');
        return view('nontonyuk.frontend.detailfilm.index', [
            'title' => 'Detail Film',
            'film' => $detailfilm,
            'kategori' => $query->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
