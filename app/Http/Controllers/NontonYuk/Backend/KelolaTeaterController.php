<?php

namespace App\Http\Controllers\NontonYuk\Backend;

use App\Http\Controllers\Controller;
use App\Models\DaftarBioskop;
use App\Models\DaftarTeater;
use App\Models\KelasTeater;
use Illuminate\Http\Request;

class KelolaTeaterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teater = DaftarTeater::all();
        $kelasteater = KelasTeater::all();
        $bioskop = DaftarBioskop::all();
        return view('nontonyuk.backend.ruangtayang.kelolateater.index', [
            'title' => 'NontonYuk | Daftar Film',
            'dataTeater' => $teater,
            'kelasteater' => $kelasteater,
            'bioskop' => $bioskop
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
            'namaTeater' => 'required',
            'kelasteater' => 'required',
            'daftarbioskop' => 'required'
        ]);

        $addTeater = DaftarTeater::create([
            'namaTeater' => $validatedData['namaTeater'],
            'kelas_teater_id' => $validatedData['kelasteater'],
            'daftar_bioskop_id' => $validatedData['daftarbioskop']
        ]);

        if($addTeater){
            return redirect('/kelolateater')->with('success', 'Teater Bioskop Berhasil Ditambahkan!!');
        }
        return redirect('/kelolateater')->with('error', 'Teater Bioskop Gagal Ditambahkan!!');

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
