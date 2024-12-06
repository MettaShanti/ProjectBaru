@extends('layouts.main')

@section('content')
    <h4>Jabatan</h4>
    <a href="{{route('pembagian1.create')}}" class="btn btn-primary">TAMBAH</a>
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Id Jabatan</th>
                <th>Nama Jabatan</th>
                <th>Keterangan Jabatan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembagian1 as $row)
            <tr>
                <td>{{ $row['pembagian1_id']}}</td>
                <td>{{ $row['pembagian1_nama']}}</td>
                <td>{{ $row['pembagian1_ket']}}</td>
                <td><a href="{{ route('pembagian1.edit', $row ['pembagian1_id'] )}}" class="btn btn-xs btn-warning">UBAH</a>
                {{-- untuk membuat btn hapus --}}
                    <form action="{{ route('pembagian1.destroy', $row['pembagian1_id'])}}" method="post" style="display:inline"> 
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