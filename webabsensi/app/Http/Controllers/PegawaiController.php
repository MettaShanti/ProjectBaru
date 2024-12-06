<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model pegawai
        $result = Pegawai::all();
        //dd($result); //untuk menampilkan data db

        // kirim data $result ke view Pegawai/index.blade.php
        return view('pegawai.index')->with('pegawai', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi input nama imput disamakan dengan tabel kolom
        $input = $request->validate([
            "pegawai_id"                    =>"required",
            "pegawai_pin"                   =>"required",
            "pegawai_nip"                   =>"required",
            "pegawai_nama"                  =>"required",
            "pegawai_alias"                 =>"required",
            "pegawai_pwd"                   =>"required",
            "pegawai_rfid"                  =>"required", 
            "pegawai_privilege"             =>"required",
            "pegawai_telp"                  =>"required",
            "pegawai_status"                =>"required",
            "tempat_lahir"                  =>"required",
            "tgl_lahir"                     =>"required",
            "pembagian1_id"                 =>"required",
            "pembagian2_id"                 =>"required",
            "pembagian3_id"                 =>"required",
            "tgl_mulai_kerja"               =>"required",
            "tgl_resign"                    =>"required",
            "gender"                        =>"required",
            "tgl_masuk_pertama"             =>"required",
            "photo_path"                    =>"required",
            "tmp_img"                       =>"required",
            "nama_bank"                     =>"required",
            "nama_rek"                      =>"required",
            "no_rek"                        =>"required",
            "password_fio_desktop"          =>"required",
            "status_login_fio_desktop"      =>"required",
            "new_pegawai_id"                =>"required",

        ]);
        //simpan
        Pegawai::create($input);

        //redirect beserta pesan sukses
        return redirect()->route('pegawai.index')->with('success', $request->pegawai_nama.' Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($pegawai_id)
    {
        // edit data
        $pegawai = Pegawai::find($pegawai_id);
        return view('pegawai.edit')->with('pegawai', $pegawai);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$pegawai_id)
    {
        $pegawai = Pegawai::find($pegawai_id);
        $input = $request->validate([
            "pegawai_id"                    =>"required",
            "pegawai_pin"                   =>"required",
            "pegawai_nip"                   =>"required",
            "pegawai_nama"                  =>"required",
            "pegawai_alias"                 =>"required",
            "pegawai_pwd"                   =>"required",
            "pegawai_rfid"                  =>"required", 
            "pegawai_privilege"             =>"required",
            "pegawai_telp"                  =>"required",
            "pegawai_status"                =>"required",
            "tempat_lahir"                  =>"required",
            "tgl_lahir"                     =>"required",
            "pembagian1_id"                 =>"required",
            "pembagian2_id"                 =>"required",
            "pembagian3_id"                 =>"required",
            "tgl_mulai_kerja"               =>"required",
            "tgl_resign"                    =>"required",
            "gender"                        =>"required",
            "tgl_masuk_pertama"             =>"required",
            "photo_path"                    =>"required",
            "tmp_img"                       =>"required",
            "nama_bank"                     =>"required",
            "nama_rek"                      =>"required",
            "no_rek"                        =>"required",
            "password_fio_desktop"          =>"required",
            "status_login_fio_desktop"      =>"required",
            "new_pegawai_id"                =>"required",

        ]);
        //update
        $pegawai->update($input);

        //redirect beserta pesan sukses
        return redirect()->route('pegawai.index')->with('success', $request->pegawai_nama.' Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pegawai_id)
    {
    $pegawai = Pegawai::find($pegawai_id);

    if (!$pegawai) {
        return redirect()->route('pegawai.index')->with('error', 'Data not found.');
    }
    $pegawai->delete();
    return redirect()->route('pegawai.index')->with('success', 'Data Pegawai Berhasil di Hapus');
    }
    // public function destroy($pegawai_id)
    // {
    //     // cari data di table pegawai berdasarkan "pegawai_id" 
    //     $pegawai = Pegawai::find($pegawai_id);
        
    //     $pegawai->delete();
    //     return redirect()->route('pegawai.index')->with('succes','Data pegawai Berhasil di Hapus');
    // }
}
