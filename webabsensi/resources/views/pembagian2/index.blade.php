@extends('layouts.main')

@section('content')
    <h4>Departement</h4>
    <a href="{{route('pembagian2.create')}}" class="btn btn-primary">TAMBAH</a>
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Id Departement</th>
                <th>Nama Departement</th>
                <th>Keterangan Departement</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembagian2 as $row)
            <tr>
                <td>{{ $row['pembagian2_id']}}</td>
                <td>{{ $row['pembagian2_nama']}}</td>
                <td>{{ $row['pembagian2_ket']}}</td>
                {{-- untuk membuat btn ubah --}}
                <td><a href="{{ route('pembagian2.edit', $row ['pembagian2_id'] )}}" class="btn btn-xs btn-warning">UBAH</a>
                {{-- untuk membuat btn hapus --}}
                    <form action="{{ route('pembagian2.destroy', $row['pembagian2_id'])}}" method="post" style="display:inline"> 
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