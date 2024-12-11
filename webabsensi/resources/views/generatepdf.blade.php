<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Laporan Absensi</h2>
        <!-- <h2>Date: {{ $date }}</h2> -->

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pin</th>
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Departemen</th>
                    <th>Divisi</th>
                    <th>Tanggal</th>
                    <th>Bulan</th>
                    <th>Hari</th>
                    <th>Status</th>
                    <th>Jam Kerja</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($absenreport as $row)
                    <tr>
                    <td>{{ $row->pegawai_id}}</td>
                    <td>{{ $row->Pin}}</td>
                    <td>{{ $row->Nip}}</td>
                    <td>{{ $row->Nama}}</td>
                    <td>{{ $row->Jabatan}}</td>
                    <td>{{ $row->Departemen}}</td>
                    <td>{{ $row->Divisi}}</td>
                    <td>{{ $row->Tanggal}}</td>
                    <td>{{ $row->Bulan}}</td>
                    <td>{{ $row->Hari}}</td>
                    <td>{{ $row->Status}}</td>
                    <td>{{ $row->Jam_Kerja}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
