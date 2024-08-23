<?php

namespace App\Http\Controllers\NontonYuk\Backend;

use App\Http\Controllers\Controller;
use App\Models\GenreFilm;
use Illuminate\Http\Request;

class GenreFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genre = GenreFilm::all();
        return view('nontonyuk.backend.film.genrefilm.index', [
            'title' => 'NontonYuk | Genre Film',
            'genre' => $genre
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
        $validate = $request->validate([
            'genre' => 'required'
        ]);

        $addGenre = GenreFilm::create([
            'namaGenre' => $validate['genre']
        ]);

        if($addGenre){
            return redirect('kategorifilm')->with('success', 'Genre Berhasil Ditambahkan');
        }
        return redirect('kategorifilm')->with('error', 'Ada Kesalahan');
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
        try {
            $genre = GenreFilm::findOrFail($id);
            $genre->delete();
            return redirect('/kategorifilm')->with('success', 'Genre Berhasil Dihapus');
        }catch (\Exception $e) {
            return redirect('/kategorifilm')->with('error', 'Terjadi Error');
        }
    }
}
