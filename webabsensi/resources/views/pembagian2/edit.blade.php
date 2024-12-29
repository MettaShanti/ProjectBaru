@extends('layouts.main')

@section('content')
<h4>Departement</h4>
<form action="{{ route('pembagian2.update', $pembagian2['pembagian2_id'])}}" method="post">
    @csrf
    @method('PUT')
    Id Departement
    @error('pembagian2_id')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="number" name="pembagian2_id" id="" class="form-control mb-2" value="{{ $pembagian2['pembagian2_id']}}">
    
    Nama Departement 
    @error('pembagian2_nama')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="text" name="pembagian2_nama" id="" class="form-control mb-2" value="{{ $pembagian2['pembagian2_nama']}}">
    
    Keterangan Departement
    @error('pembagian2_ket')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="pembagian2_ket" id="" class="form-control mb-2" value="{{ $pembagian2['pembagian2_ket']}}">

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
