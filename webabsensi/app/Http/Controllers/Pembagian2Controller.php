<?php

namespace App\Http\Controllers;

use App\Models\Pembagian2;
use Illuminate\Http\Request;

class Pembagian2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model Pembagian2
        $result = Pembagian2::all();
        //dd($result); untuk menampilkan data db

        // kirim data $result ke view Pembagian2/index.blade.php
        return view('pembagian2.index')->with('pembagian2', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembagian2.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi input nama, input disamakan dengan tabel kolom
        $input = $request->validate([
           
            "pembagian2_id"       =>"required",
            "pembagian2_nama"     =>"required",
            "pembagian2_ket"      =>"required",

        ]);
        //simpan
        Pembagian2::create($input);

        //redirect beserta pesan sukses
        return redirect()->route('pembagian2.index')->with('success', $request->pembagian2_nama.' Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembagian2 $pembagian2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($pembagian2_id)
    {
        // edit data
        $pembagian2 = Pembagian2::find($pembagian2_id);
        return view('pembagian2.edit')->with('pembagian2', $pembagian2);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $pembagian2_id)
    {
        $pembagian2 = Pembagian2::find($pembagian2_id);
        $input = $request->validate([
           
            "pembagian2_id"       =>"required",
            "pembagian2_nama"     =>"required",
            "pembagian2_ket"      =>"required",

        ]);
        //update
        $pembagian2->update($input);

        //redirect beserta pesan sukses
        return redirect()->route('pembagian2.index')->with('success', $request->pembagian2_nama.' Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pembagian2_id)
    {
    $pembagian2 = Pembagian2::find($pembagian2_id);

    if (!$pembagian2) {
        return redirect()->route('pembagian2.index')->with('error', 'Data not found.');
    }
    $pembagian2->delete();
    return redirect()->route('pembagian2.index')->with('success', 'Data Departemen Berhasil di Hapus');
    }
    // public function destroy($pembagian2_id)
    // {
    //     $pembagian2 = Pembagian2::find($pembagian2_id);
        
    //     $pembagian2->delete();
    //     return redirect()->route('pembagian2.index')->with('succes','Data Departemen Berhasil di Hapus');
    // }
}
