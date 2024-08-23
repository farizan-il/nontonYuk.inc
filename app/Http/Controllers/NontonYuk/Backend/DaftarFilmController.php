<?php

namespace App\Http\Controllers\NontonYuk\Backend;

use App\Http\Controllers\Controller;
use App\Models\DaftarFilm;
use Illuminate\Http\Request;

class DaftarFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftarfilm = DaftarFilm::with('genre')->get();
        return view('nontonyuk.backend.film.daftarfilm.index', [
            'title' => 'NontonYuk | Daftar Film',
            'daftarfilm' => $daftarfilm
        ]);
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
        //
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
