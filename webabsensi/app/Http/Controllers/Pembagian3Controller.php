<?php

namespace App\Http\Controllers;

use App\Models\Pembagian3;
use Illuminate\Http\Request;

class Pembagian3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model Pembagian2
        $result = Pembagian3::all();
        //dd($result); untuk menampilkan data db

        // kirim data $result ke view Pembagian3/index.blade.php
        return view('pembagian3.index')->with('pembagian3', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembagian3.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi input nama imput disamakan dengan tabel kolom
        $input = $request->validate([
           
            "pembagian3_id"       =>"required",
            "pembagian3_nama"     =>"required",
            "pembagian3_ket"      =>"required",

        ]);
        //simpan
        Pembagian3::create($input);

        //redirect beserta pesan sukses
        return redirect()->route('pembagian3.index')->with('success', $request->pembagian3_nama.' Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembagian3 $pembagian3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($pembagian3_id)
    {
        // edit data
        $pembagian3 = Pembagian3::find($pembagian3_id);
        return view('pembagian3.edit')->with('pembagian3', $pembagian3);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$pembagian3_id)
    {
        $pembagian3 = Pembagian3::find($pembagian3_id);
        $input = $request->validate([
           
            "pembagian3_id"       =>"required",
            "pembagian3_nama"     =>"required",
            "pembagian3_ket"      =>"required",

        ]);
        //update
        $pembagian3->update($input);

        //redirect beserta pesan sukses
        return redirect()->route('pembagian3.index')->with('success', $request->pembagian3_nama.' Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pembagian3_id)
    {
    $pembagian3 = Pembagian3::find($pembagian3_id);

    if (!$pembagian3) {
        return redirect()->route('pembagian3.index')->with('error', 'Data not found.');
    }
    $pembagian3->delete();
    return redirect()->route('pembagian3.index')->with('success', 'Data Divisi Berhasil di Hapus');
    }
    // public function destroy($pembagian3_id)
    // {
    //     $pembagian3 = Pembagian3::find($pembagian3_id);
        
    //     $pembagian3->delete();
    //     return redirect()->route('pembagian3.index')->with('succes','Data Divisi Berhasil di Hapus');
    // }
}
