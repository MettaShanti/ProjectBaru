@extends('layouts.main')

@section('content')
    <h4>Absensi</h4>
    <a href="{{route('attlog.create')}}" class="btn btn-primary">Check in</a>
    <table id="example" class="display nowrap" style="width:100%">
    <thead>
            <tr>
                <th>Pin</th>
                <th>Scan Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attlog as $row)
            <tr>
                <td>{{ $row['pin']}}</td>
                <td>{{ $row['scan_date']}}</td>
            </tr>
            @endforeach
            </tbody>
    </table>
@endsection