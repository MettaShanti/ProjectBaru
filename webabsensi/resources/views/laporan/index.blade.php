@extends('layouts.main')

@section('content')
    <h4 class="mt-4">Laporan Absensi</h4>

    <!-- Form Filter Data -->
    <div class="row mt-4">
        <div class="col-md-6">
            <form action="{{ route('absenreport.filter') }}" method="post" class="form-inline mb-3">
                @csrf
                <div class="input-group">
                    <input type="date" name="tgl_mulai" class="form-control" required>
                    <input type="date" name="tgl_selesai" class="form-control ml-2" required>
                    <button type="submit" class="btn btn-info ml-2">Filter</button>
                </div>
            </form>
        </div>

        <!-- Form Cetak PDF -->
        <div class="col-md-6">
            <form action="{{ route('absenreport.cetak-pdf') }}" method="post" class="form-inline">
                @csrf
                <div class="input-group">
                    <input type="date" name="tgl_mulai" class="form-control" required>
                    <input type="date" name="tgl_selesai" class="form-control ml-2" required>
                    <button type="submit" class="btn btn-danger ml-2">Cetak PDF</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel dengan DataTables -->
    <div class="table-responsive mt-4">
    <table id="example" class="display nowrap" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>ID Pegawai</th>
                    <th>Pin Pegawai</th>
                    <th>Nip Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Jabatan Pegawai</th>
                    <th>Departemen Pegawai</th>
                    <th>Divisi Pegawai</th>
                    <th>Tanggal</th>
                    <th>Bulan</th>
                    <th>Hari</th>
                    <th>Scan Awal</th>
                    <th>Scan Akhir</th>
                    <th>Status</th>
                    <th>Jam Kerja</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($absenreport as $row)
                    <tr>
                        <td>{{ $row->pegawai_id }}</td>
                        <td>{{ $row->Pin }}</td>
                        <td>{{ $row->Nip }}</td>
                        <td>{{ $row->Nama }}</td>
                        <td>{{ $row->Jabatan }}</td>
                        <td>{{ $row->Departemen }}</td>
                        <td>{{ $row->Divisi }}</td>
                        <td>{{ $row->Tanggal }}</td>
                        <td>{{ $row->Bulan }}</td>
                        <td>{{ $row->Hari }}</td>
                        <td>{{ $row->Scan_awal }}</td>
                        <td>{{ $row->Scan_akhir }}</td>
                        <td>{{ $row->Status }}</td>
                        <td>{{ $row->Jam_Kerja }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<!-- @section('scripts')
    DataTables CSS dan JS
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script> -->

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                autoWidth: false,
                pageLength: 25,
                order: [[0, 'asc']]
            });
        });
    </script>
@endsection

<!-- yang ke 1 -->
<!-- @extends('layouts.main')

@section('content')
    <h4>Laporan</h4>
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
@endsection -->
