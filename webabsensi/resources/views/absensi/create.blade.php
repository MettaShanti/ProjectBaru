@extends('layouts.main')

@section('content')
<h4>Absensi</h4>
<form action="{{ route('attlog.store') }}" method="post">
    @csrf
    <!-- Sn
    @error('sn')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="numer" name="sn" id="" class="form-control mb-2"> -->
    
    <!-- Scan Date 
    @error('scan_date')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="datetime-local" name="scan_date" id="" class="form-control mb-2"> -->
    
    Pin
    @error('pin')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="numer" name="pin" id="" class="form-control mb-2">

    <!-- Verifymode
    @error('verifymode')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="verifymode" id="" class="form-control mb-2">

    Inoutmode
    @error('inoutmode')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="inoutmode" id="" class="form-control mb-2">

    Reserved
    @error('reserved')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="reserved" id="" class="form-control mb-2">

    Work Code
    @error('work_code')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="work_code" id="" class="form-control mb-2">

    Att Id
    @error('att_id')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="att_id" id="" class="form-control mb-2"> -->

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>


@endsection
