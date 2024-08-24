<?php

namespace App\Http\Controllers\NontonYuk\Backend;

use App\Http\Controllers\Controller;
use App\Models\DaftarBioskop;
use App\Models\KategoriBioskop;
use App\Models\LokasiBioskop;
use Illuminate\Http\Request;

class KelolaBioskopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBioskop = DaftarBioskop::with('lokasi', 'kategori')->get();
        $Lokasi = LokasiBioskop::all();
        $kategori = KategoriBioskop::all();
        return view('nontonyuk.backend.bioskop.kelolabioskop.index', [
            'title' => 'NontonYuk | Daftar Bioskop',
            'bioskop' => $dataBioskop,
            'lokasi' => $Lokasi,
            'kategori' => $kategori,
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
            'Bioskop' => 'required',
            'lokasi' => 'required',
            'kategori' => 'required'
        ]);

        $addBioskop = DaftarBioskop::create([
            'namaBioskop' => $validatedData['Bioskop'],
            'lokasi_bioskop_id' => $validatedData['lokasi'],
            'kategori_bioskop_id' => $validatedData['kategori']
        ]);

        if($addBioskop){
            return redirect('daftarbioskop')->with('success', 'bioskop telah berhasil ditambahkan!');
        }
        return redirect('daftarbioskop')->with('error', 'terdapat kesalahan');
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
            $bioksop = DaftarBioskop::findOrFail($id);
            $bioksop->delete();
            return redirect('daftarbioskop')->with('success', 'bioskop telah berhasil dihapus!');
        }catch(\Exception $e){
            return redirect('daftarbioskop')->with('error', 'bioskop gagal dihapus!');
        }
    }
}
