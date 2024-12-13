@extends('layouts.main')

@section('content')
    <h4>Laporan</h4>
    <br>
    <form method="post">
        <input type="date" name="tgl-mulai" class="form-control">
        <input type="date" name="tgl-selesai" class="form-control">
        <button type="submit" name="filter-tgl" class="btn btn-info"></button>
    </form>
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Id Pegawai</th>
                <th>Pin Pegawai</th>
                <th>Nip Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Jabatan Pegawai</th>
                <th>Departemen Pegawai</th>
                <th>Divisi Pegawai</th>
                <th>Tanggal</th>
                <th>Bulan</th>
                <th>Hari</th>
                <th>Scan_awal</th>
                <th>Scan_akhir</th>
                <th>Status</th>
                <th>Jam_Kerja</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($absenreport as $row)
            <tr>
                <td>{{ $row['pegawai_id']}}</td>
                <td>{{ $row['Pin']}}</td>
                <td>{{ $row['Nip']}}</td>
                <td>{{ $row['Nama']}}</td>
                <td>{{ $row['Jabatan']}}</td>
                <td>{{ $row['Departemen']}}</td>
                <td>{{ $row['Divisi']}}</td>
                <td>{{ $row['Tanggal']}}</td>
                <td>{{ $row['Bulan']}}</td>
                <td>{{ $row['Hari']}}</td>
                <td>{{ $row['Scan_awal']}}</td>
                <td>{{ $row['Scan_akhir']}}</td>
                <td>{{ $row['Status']}}</td>
                <td>{{ $row['Jam_Kerja']}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
@endsection