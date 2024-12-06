@extends('layouts.main')

@section('content')
    <h4>Divisi</h4>
    <a href="{{route('pembagian3.create')}}" class="btn btn-primary">TAMBAH</a>
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Id Divisi</th>
                <th>Nama Divisi</th>
                <th>Keterangan Divisi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembagian3 as $row)
            <tr>
                <td>{{ $row['pembagian3_id']}}</td>
                <td>{{ $row['pembagian3_nama']}}</td>
                <td>{{ $row['pembagian3_ket']}}</td>
                {{-- untuk membuat btn ubah --}}
                <td><a href="{{ route('pembagian3.edit', $row ['pembagian3_id'] )}}" class="btn btn-xs btn-warning">UBAH</a>
                {{-- untuk membuat btn hapus --}}
                    <form action="{{ route('pembagian3.destroy', $row['pembagian3_id'])}}" method="post" style="display:inline"> 
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-xs btn-danger">HAPUS</button>
                    </form>
                    {{-- style="display:inline" untuk memindahkan btn ke samping --}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
@endsection