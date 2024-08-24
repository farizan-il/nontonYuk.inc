<?php

namespace App\Http\Controllers\NontonYuk\Backend;

use App\Http\Controllers\Controller;
use App\Models\KategoriBioskop;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class KategoriBioskopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoribioskop = KategoriBioskop::all();
        return view('nontonyuk.backend.bioskop.kategoribioskop.index', [
            'title' => '',
            'kategoribioskop' => $kategoribioskop
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
        $validated = $request->validate([
            'namaKategori' => 'required',
            'logo' => 'required|image',
            'color' => 'required'
        ]);

        if($request->hasFile('logo')) 
        {
            $logoKategori = $request->file('logo');
            $filename = time() . '.' . $logoKategori->getClientOriginalExtension();

            Image::make($logoKategori)->save(public_path('image/logo_bioskop/'. $filename));
            $validated['logo'] = $filename;
        }

        $addkategori = KategoriBioskop::create([
            'namaKategori' => $validated['namaKategori'],
            'warna' => $validated['color'],
            'logo' => $validated['logo']
        ]);

        if($addkategori){
            return redirect('/kategoribioskop')->with('success', 'Kategori Bioskop Berhasil Ditambahkan!!');
        }else{
            return redirect('/kategoribioskop')->with('error', 'Kategori Bioskop Gagal Ditambahkan!!');

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
        try{
            $kategori = KategoriBioskop::findOrFail($id);
            $kategori->delete();
            return redirect('/kategoribioskop')->with('success', 'Kategori Bioskop Berhasil Dihapus');
        }catch(\Exception $e){
            return redirect('/kategoribioskop')->with('error', 'Terjadi Error');
        }
    }
}
