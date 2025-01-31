@extends('layouts.main')

@section('content')
    <h4>Absensi</h4>
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('attlog.create') }}" class="btn btn-primary">Check In</a>
        <!-- <a href="{{ route('attlog.create') }}" class="btn btn-secondary">Check Out</a> -->
    </div>
    
    <table id="example" class="display nowrap table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Pin</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attlog as $row)
                <tr>
                    <td>{{ $row['pin'] }}</td>
                    <td>{{ $row['scan_date'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
