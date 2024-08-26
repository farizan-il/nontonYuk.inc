<?php

namespace App\Http\Controllers\NontonYuk\Backend;

use App\Http\Controllers\Controller;
use App\Models\DaftarBioskop;
use App\Models\DaftarFilm;
use App\Models\DaftarTeater;
use App\Models\JadwalTayang;
use Illuminate\Http\Request;
use Carbon\Carbon;

class JadwalTayangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $jadwaltayang = JadwalTayang::with('film', 'teater')->get();
        
        $query = JadwalTayang::with('film', 'teater.bioskop.lokasi');

        // Pencarian berdasarkan judul film, nama bioskop, atau lokasi
        if ($request->has('search')) {
            $search = $request->input('search');
            $searchTerms = array_map('trim', explode(',', $search)); // Memecah dan menghapus spasi

            // Pastikan ada setidaknya satu elemen untuk menghindari kesalahan
            if (count($searchTerms) > 0) {
                $query->where(function ($q) use ($searchTerms) {
                    foreach ($searchTerms as $term) {
                        $q->where(function ($q) use ($term) {
                            $q->whereHas('film', function ($q) use ($term) {
                                $q->where('judulFilm', 'like', '%' . $term . '%');
                            })
                            ->orWhereHas('teater.bioskop', function ($q) use ($term) {
                                $q->where('namaBioskop', 'like', '%' . $term . '%');
                            })
                            ->orWhereHas('teater.bioskop.lokasi', function ($q) use ($term) {
                                $q->where('kota', 'like', '%' . $term . '%');
                            });
                        });
                    }
                });
            }
        }

        $jadwaltayang = $query->get();
        $dataFilm = DaftarFilm::all();
        $teater = DaftarTeater::with('bioskop')->get();
        return view('nontonyuk.backend.jadwaltayang.index', [
            'title' => 'NontonYuk | Jadwal Tayang',
            'jadwaltayang' => $jadwaltayang,
            'datafilm' => $dataFilm,
            'teater' => $teater
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
            'jamTayang' => 'required',
            'tanggal' => 'required',
            'film' => 'required',
            'teater' => 'required'
        ]);

        $addJadwalTayang = JadwalTayang::create([
            'jamTayang' => $validatedData['jamTayang'],
            'tanggal' => $validatedData['tanggal'],
            'daftar_film_id' => $validatedData['film'],
            'daftar_teater_id' => $validatedData['teater']
        ]);

        if($addJadwalTayang){
            return redirect('/jadwaltayang')->with('success', 'Jadwal Tayang Telah Berhasil Ditambahkan!');
        }
        return redirect('/jadwaltayang')->with('error', 'Jadwal Tayang Gagal Ditambahkan!');
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
