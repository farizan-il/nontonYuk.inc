<?php

namespace App\Http\Controllers\NontonYuk\Backend;

use App\Http\Controllers\Controller;
use App\Models\DaftarBioskop;
use App\Models\KelasTeater;
use Illuminate\Http\Request;

class KelasTeaterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $dataBioskop = DaftarBioskop::all();
        $kelasTeater = KelasTeater::all();
        return view('nontonyuk.backend.ruangtayang.kelasteater.index', [
            'title' => 'NontonYuk | Kelas Teater',
            // 'dataBioskop' => $dataBioskop,
            'kelasTeater' => $kelasTeater
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
            'harga' => 'required',
            'namaKelas' => 'required'
        ]);

        $addKelasTeater = KelasTeater::create([
            'namaKelas' => $validatedData['namaKelas'],
            'harga' => $validatedData['harga']  
        ]);

        if($addKelasTeater){
            return redirect('/kelasteater')->with('success', 'Kelas Teater Berhasil Ditambahkan!!');
        }
        return redirect('/kelasteater')->with('error', 'Kelas Teater Gagal Ditambahkan!!');

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
