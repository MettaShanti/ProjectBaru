@extends('layouts.main')

@section('content')
<h4>Detail Pegawai</h4>
<form action="{{ route('pegawai.update', $pegawai['pegawai_id'])}}" method="post">
    @csrf
    @method('PUT') 
    Id Pegawai
    @error('pegawai_id')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="number" name="pegawai_id" id="" class="form-control mb-2" value="{{ $pegawai['pegawai_id']}}">

    Pin Pegawai
    @error('pegawai_pin')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="number" name="pegawai_pin" id="" class="form-control mb-2" value="{{ $pegawai['pegawai_pin']}}">
    
    Nip Pegawai 
    @error('pegawai_nip')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="number" name="pegawai_nip" id="" class="form-control mb-2" value="{{ $pegawai['pegawai_nip']}}">
    
    Nama Pegawai
    @error('pegawai_nama')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="pegawai_nama" id="" class="form-control mb-2" value="{{ $pegawai['pegawai_nama']}}">

    Alias Pegawai
    @error('pegawai_alias')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="pegawai_alias" id="" class="form-control mb-2" value="{{ $pegawai['pegawai_alias']}}">

    Pwd Pegawai
    @error('pegawai_pwd')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="pegawai_pwd" id="" class="form-control mb-2" value="{{ $pegawai['pegawai_pwd']}}">

    Rfid Pegawai
    @error('pegawai_rfid')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="pegawai_rfid" id="" class="form-control mb-2" value="{{ $pegawai['pegawai_rfid']}}">

    Privilage Pegawai
    @error('pegawai_privilege')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="pegawai_privilege" id="" class="form-control mb-2" value="{{ $pegawai['pegawai_privilege']}}">
    
    Telp Pegawai
    @error('pegawai_telp')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="number" name="pegawai_telp" id="" class="form-control mb-2" value="{{ $pegawai['pegawai_telp']}}">

    Status Pegawai
    @error('pegawai_status')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="number" name="pegawai_status" id="" class="form-control mb-2" value="{{ $pegawai['pegawai_status']}}">

    Tempat Lahir
    @error('tempat_lahir')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="tempat_lahir" id="" class="form-control mb-2" value="{{ $pegawai['tempat_lahir']}}">

    Tanggal Lahir
    @error('tgl_lahir')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="date" name="tgl_lahir" id="" class="form-control mb-2" value="{{ $pegawai['tgl_lahir']}}">

    Jabatan
    @error('pembagian1_id')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="number" name="pembagian1_id" id="" class="form-control mb-2" value="{{ $pegawai['pembagian1_id']}}">

    Departemen
    @error('pembagian2_id')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="number" name="pembagian2_id" id="" class="form-control mb-2" value="{{ $pegawai['pembagian2_id']}}">

    Divisi
    @error('pembagian3_id')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="number" name="pembagian3_id" id="" class="form-control mb-2" value="{{ $pegawai['pembagian3_id']}}">

    Tanggal Mulai Kerja
    @error('tgl_mulai_kerja')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="date" name="tgl_mulai_kerja" id="" class="form-control mb-2" value="{{ $pegawai['tgl_mulai_kerja']}}">

    Tanggal Resign
    @error('tgl_resign')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="date" name="tgl_resign" id="" class="form-control mb-2" value="{{ $pegawai['tgl_resign']}}">

    Gender
    @error('gender')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="number" name="gender" id="" class="form-control mb-2" value="{{ $pegawai['gender']}}">

    Tanggal Masuk Pertama
    @error('tgl_masuk_pertama')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="date" name="tgl_masuk_pertama" id="" class="form-control mb-2" value="{{ $pegawai['tgl_masuk_pertama']}}">

    Photo Path
    @error('photo_path')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="photo_path" id="" class="form-control mb-2" value="{{ $pegawai['photo_path']}}">

    Tmp Img
    @error('tmp_img')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="tmp_img" id="" class="form-control mb-2" value="{{ $pegawai['tmp_img']}}">

    Nama Bank
    @error('nama_bank')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="nama_bank" id="" class="form-control mb-2" value="{{ $pegawai['nama_bank']}}">

    Nama Rek
    @error('nama_rek')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="nama_rek" id="" class="form-control mb-2" value="{{ $pegawai['nama_rek']}}">

    No Rek
    @error('no_rek')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="number" name="no_rek" id="" class="form-control mb-2" value="{{ $pegawai['no_rek']}}">

    Password Fio Desktop
    @error('password_fio_desktop')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="number" name="password_fio_desktop" id="" class="form-control mb-2" value="{{ $pegawai['password_fio_desktop']}}">

    Status Login Fio Desktop
    @error('status_login_fio_desktop')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="number" name="status_login_fio_desktop" id="" class="form-control mb-2" value="{{ $pegawai['status_login_fio_desktop']}}">

    New Pegawai Id
    @error('new_pegawai_id')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="number" name="new_pegawai_id" id="" class="form-control mb-2" value="{{ $pegawai['new_pegawai_id']}}">


    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection