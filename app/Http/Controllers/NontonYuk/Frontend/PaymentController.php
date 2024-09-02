<?php

namespace App\Http\Controllers\NontonYuk\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DaftarFilm;
use App\Models\DetailKursi;
use App\Models\JadwalTayang;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function schedule(string $id)
    {
        //
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
        $schedulefilm = DaftarFilm::findOrFail($id);

        // Ambil jadwal tayang yang sesuai dengan id film
        $tanggaltayang = JadwalTayang::with('teater', 'teater.kelas', 'teater.bioskop')
            ->where('daftar_film_id', $id) // Filter berdasarkan id film
            ->get();
            
        return view('nontonyuk.frontend.payment.schedulefilm', [
            'title' => '',
            'schedulefilm' => $schedulefilm,
            'jadwal' => $tanggaltayang
        ]);
    }

    public function pilihkursi(string $id) 
    {
        $jamtayang = JadwalTayang::findOrFail($id);
        $kursidetail = DetailKursi::where('daftar_teater_id', $jamtayang->daftar_teater_id)
            ->with(['kolom', 'nomor', 'teater.kelas'])
            ->get();
            
        return view('nontonyuk.frontend.payment.pilihkursi', [
            'title' => 'Pilih Kursi',
            'teatertayang' => $jamtayang,
            'kursi' => $kursidetail
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
