<?php

namespace App\Http\Controllers\NontonYuk\Backend;

use App\Http\Controllers\Controller;
use App\Models\LokasiBioskop;
use Illuminate\Http\Request;

class KelolaLokasiController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Lokasi = LokasiBioskop::all();
        return view('nontonyuk.backend.kelolalokasi.index', [
            'title' => 'NontonYuk | Kelola Lokasi',
            'dataLokasi' => $Lokasi
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
        $validatedData = $request->validate([
            'kota' => 'required',
            'provinsi' => 'required'
        ]);

        $addLokasi = LokasiBioskop::create([
            'kota' => $validatedData['kota'],
            'provinsi' => $validatedData['provinsi']
        ]);

        if($addLokasi){
            return redirect('kelolalokasi')->with('success', 'Lokasi Berhasil Ditambhakan!');
        }
        return redirect('kelolalokasi')->with('error', 'Lokasi Gagal Ditambhakan!');

        
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
            $lokasi = LokasiBioskop::findOrFail($id);
            $lokasi->delete();
            return redirect('kelolalokasi')->with('success', 'Lokasi Berhasil Dihapus!');
        }catch(\Exception $e){
            return redirect('kelolalokasi')->with('error', 'Lokasi Gagal Dihapus!');
        }
    }
}
