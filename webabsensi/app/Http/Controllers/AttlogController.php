<?php

namespace App\Http\Controllers;

use App\Models\Attlog;
use Illuminate\Http\Request;


class AttlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model attlog
        $result = Attlog::all();
        //dd($result); untuk menampilkan data db

        // kirim data $result ke view attlog/index.blade.php
        return view('absensi.index')->with('attlog', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('absensi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input, tanpa `sn` karena akan di-generate otomatis
    $input = $request->validate([
        "pin"         => "required",
    ]);
    // Masukkan nilai `sn` yang sudah digenerate ke dalam data input
    $input['sn'] = '665544424';
    $input['verifymode'] = '0';
    $input['inoutmode'] = '0';
    $input['reserved'] = '1';
    $input['work_code'] = '0';
    $input['att_id'] = '1';
    $input['scan_date'] = now();

    // Simpan ke database
    Attlog::create($input);

    // Redirect beserta pesan sukses
    return redirect()->route('attlog.index')->with('success', 'Berhasil Disimpan');
}

    /**
     * Display the specified resource.
     */
    public function show(Attlog $attlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attlog $attlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attlog $attlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attlog $attlog)
    {
        //
    }
}
