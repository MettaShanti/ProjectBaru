@extends('layouts.main')

@section('content')
<h4>Absensi</h4>
<form action="{{ route('attlog.store') }}" method="post">
    @csrf
    Id Pegawai
    @error('pegawai_id')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="numer" name="pegawai_id" id="" class="form-control mb-2">
    
    Pin 
    @error('Pin')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="text" name="Pin" id="" class="form-control mb-2">
    
    Nip
    @error('Nip')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="Nip" id="" class="form-control mb-2">

    Nama
    @error('inoutmode')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="Nama" id="" class="form-control mb-2">

    Jabatan
    @error('Jabatan')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="Jabatan" id="" class="form-control mb-2">

    Departemen
    @error('Departemen')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="Departemen" id="" class="form-control mb-2">

    Divisi
    @error('Divisi')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="Divisi" id="" class="form-control mb-2">

    Tanggal
    @error('Tanggal')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="Tanggal" id="" class="form-control mb-2">

    Bulan
    @error('Bulan')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="Bulan" id="" class="form-control mb-2">

    Hari
    @error('Hari')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="Hari" id="" class="form-control mb-2">

    Scan Awal
    @error('Scan_awal')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="Scan_awal" id="" class="form-control mb-2">

    Scan Akhir
    @error('Scan_akhir')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="Scan_akhir" id="" class="form-control mb-2">

    Status
    @error('Status')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="Status" id="" class="form-control mb-2">

    Jam Kerja
    @error('Jam_Kerja')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="Jam_Kerja" id="" class="form-control mb-2">

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
