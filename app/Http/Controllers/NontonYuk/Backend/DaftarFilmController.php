<?php

namespace App\Http\Controllers\NontonYuk\Backend;

use App\Http\Controllers\Controller;
use App\Models\DaftarFilm;
use App\Models\GenreFilm;
use Illuminate\Contracts\Support\ValidatedData;
use Intervention\Image\Facades\Image;
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
        $genre = GenreFilm::all();
        return view('nontonyuk.backend.film.daftarfilm.create', [
            'title' => 'NontonYuk | Menambahkan Film',
            'genre' => $genre
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'sampulFilm' => 'required|image',
            'judulFilm' => 'required',
            'genreFilm' => 'required',
            'sinopsis' => 'required',
            'durasi' => 'required',
            'rating' => 'required',
            'produser' => 'required',
            'director' => 'required',
            'penulis' => 'required',
            'pemeran' => 'required',
            'distributor' => 'required',
        ]);

        

        if($request->hasFile('sampulFilm')) {
            $image = $request->file('sampulFilm');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(900,600)->save(public_path('image/sampul_film/'. $filename));
            $ValidatedData['sampulFilm'] = $filename;
        }

       
        $saveData = DaftarFilm::create([
            'judulFilm' => $ValidatedData['judulFilm'],
            'genre' => $ValidatedData['genreFilm'],
            'sinopsis' => $ValidatedData['sinopsis'],
            'sampulFilm' => $ValidatedData['sampulFilm'],
            'durasi' => $ValidatedData['durasi'],
            'rating' => $ValidatedData['rating'],
            'produser' => $ValidatedData['produser'],
            'director' => $ValidatedData['director'],
            'penulis' => $ValidatedData['penulis'],
            'pemeran' => $ValidatedData['pemeran'],
            'distributor' => $ValidatedData['distributor'],
        ]);

        if($saveData){
            return redirect('/daftarfilm')->with('success', 'Film Berhasil Ditambahkan!!');
        }else{
            return redirect('/daftarfilm')->with('error', 'Film Gagal Ditambahkan!!');

        }
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
