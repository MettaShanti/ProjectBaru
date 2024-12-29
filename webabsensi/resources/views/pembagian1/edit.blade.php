@extends('layouts.main')

@section('content')
<h4>Jabatan</h4>
<form action="{{ route('pembagian1.update', $pembagian1['pembagian1_id'])}}" method="post">
    @csrf
    @method('PUT') 
    Id Jabatan
    @error('pembagian1_id')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="number" name="pembagian1_id" id="" class="form-control mb-2" value="{{ $pembagian1['pembagian1_id']}}">
    
    Nama Jabatan 
    @error('pembagian1_nama')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="text" name="pembagian1_nama" id="" class="form-control mb-2" value="{{ $pembagian1['pembagian1_nama']}}">
    
    Keterangan Jabatan
    @error('pembagian1_ket')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="pembagian1_ket" id="" class="form-control mb-2" value="{{ $pembagian1['pembagian1_ket']}}">

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
