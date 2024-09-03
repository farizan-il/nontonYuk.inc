<?php

namespace App\Http\Controllers;

use App\Models\TestApi;
use Illuminate\Http\Request;

class TestApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testApi = TestApi::paginate(10);
        return response()->json([
            'data' => $testApi
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testApi = TestApi::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'kota' => $request->kota,
            'tanggalLahir' => $request->tanggalLahir
        ]);

        return response()->json([
            'data' => $testApi
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TestApi $testApi)
    {
        return response()->json([
            'data' => $testApi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TestApi $testApi)
    {
        $testApi->nama = $request->nama;
        $testApi->email = $request->email;
        $testApi->kota = $request->kota;
        $testApi->tanggalLahir = $request->tanggalLahir;
        $testApi->save();

        return response()->json([
            'data' => $testApi
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestApi $testApi)
    {
        $testApi->delete();
        return response()->json([
            'message' => 'data telah di hapus!'
        ], 204);
    }
}
