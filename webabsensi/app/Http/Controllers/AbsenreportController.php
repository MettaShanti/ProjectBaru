<?php

namespace App\Http\Controllers;

use App\Models\Absenreport;
use Illuminate\Http\Request;

class AbsenreportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model absenreport
        $result = Absenreport::all();
        //dd($result); untuk menampilkan data db

        // kirim data $result ke view absenreport/index.blade.php
        return view('laporan.index')->with('absenreport', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attlog.create');
    }

    // filter 
    public function filter(Request $request)
{
    //DD:($request)
    // Validasi input tanggal
    $request->validate([
        'tgl_mulai' => 'required|date',
        'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
    ]);

    $mulai = $request->input('tgl_mulai');
    $selesai = $request->input('tgl_selesai');

    // Ambil data berdasarkan rentang tanggal pada `scan_awal` dan `scan_akhir`
    $absenreport = Absenreport::whereBetween('scan_awal', [$mulai, $selesai])
                    ->orWhereBetween('scan_akhir', [$mulai, $selesai])
                    ->get();

    // Kirim data hasil filter ke view
    return view('laporan.index', compact('absenreport'));
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
    public function show(Absenreport $absenreport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absenreport $absenreport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absenreport $absenreport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absenreport $absenreport)
    {
        //
    }

}
