<?php

namespace App\Http\Controllers;

use App\Models\Pembagian1;
use Illuminate\Http\Request;

class Pembagian1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model Pembagian1
        $result = Pembagian1::all();
        //dd($result); untuk menampilkan data db

        // kirim data $result ke view Pembagian1/index.blade.php
        return view('pembagian1.index')->with('pembagian1', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembagian1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi input nama, input disamakan dengan tabel kolom
        $input = $request->validate([
           
            "pembagian1_id"       =>"required",
            "pembagian1_nama"     =>"required",
            "pembagian1_ket"      =>"required",

        ]);
        //simpan
        Pembagian1::create($input);

        //redirect beserta pesan sukses
        return redirect()->route('pembagian1.index')->with('success', $request->pembagian1_nama.' Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembagian1 $pembagian1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($pembagian1_id)
    {
        // edit data
        $pembagian1 = Pembagian1::find($pembagian1_id);
        return view('pembagian1.edit')->with('pembagian1', $pembagian1);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$pembagian1_id)
    {
        $pembagian1 = Pembagian1::find($pembagian1_id);
        $input = $request->validate([
           
            "pembagian1_id"       =>"required",
            "pembagian1_nama"     =>"required",
            "pembagian1_ket"      =>"required",

        ]);
        //update
        $pembagian1->update($input);

        //redirect beserta pesan sukses
        return redirect()->route('pembagian1.index')->with('success', $request->pembagian1_nama.' Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pembagian1_id)
    {
    $pembagian1 = Pembagian1::find($pembagian1_id);

    if (!$pembagian1) {
        return redirect()->route('pembagian1.index')->with('error', 'Data not found.');
    }
    $pembagian1->delete();
    return redirect()->route('pembagian1.index')->with('success', 'Data Jabatan Berhasil di Hapus');
    }
    // public function destroy($pembagian1_id)
    // {
    //     $pembagian1 = Pembagian1::find($pembagian1_id);
        
    //     $pembagian1->delete();
    //     return redirect()->route('pembagian1.index')->with('succes','Data Jabatan Berhasil di Hapus');
    // }
}
