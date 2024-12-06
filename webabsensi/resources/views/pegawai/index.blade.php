@extends('layouts.main')

@section('content')
    <h4>Pegawai</h4>
    <a href="{{route('pegawai.create')}}" class="btn btn-primary">TAMBAH</a>
    <!-- <table id="example" class="display nowrap" style="width:100%"> tambah ini juga -->
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Id Pegawai</th>
                <th>Pin Pegawai</th>
                <th>Nip Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Alias Pegawai</th>
                <th>Pwd Pegawai</th>
                <th>Rfid Pegawai</th>
                <th>Privilege Pegawai</th>
                <th>Telp Pegawai</th>
                <th>Status Pegawai</th>
                <th>Tempat Lahir</th>
                <th>Tgl Lahir</th>
                <th>ID Jabatan</th>
                <th>ID Departemen</th>
                <th>ID Divisi</th>
                <th>Tgl Mulai Kerja</th>
                <th>Tgl Resign</th>
                <th>Gender</th>
                <th>Tgl Masuk Pertama</th>
                <th>Photo_path</th>
                <th>Tmp_img</th>
                <th>Nama_bank</th>
                <th>No_rek</th>
                <th>Nama_rek</th>
                <th>Password Fio Desktop</th>
                <th>Status Login Fio Desktop</th>
                <th>New Pegawai Id</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $row)
            <tr>
                <td>{{ $row['pegawai_id']}}</td>
                <td>{{ $row['pegawai_pin']}}</td>
                <td>{{ $row['pegawai_nip']}}</td>
                <td>{{ $row['pegawai_nama']}}</td>
                <td>{{ $row['pegawai_alias']}}</td>
                <td>{{ $row['pegawai_pwd']}}</td>
                <td>{{ $row['pegawai_rfid']}}</td>
                <td>{{ $row['pegawai_privilege']}}</td>
                <td>{{ $row['pegawai_telp']}}</td>
                <td>{{ $row['pegawai_status']}}</td>
                <td>{{ $row['tempat_lahir']}}</td>
                <td>{{ $row['tgl_lahir']}}</td>
                <td>{{ $row['pembagian1_id']}}</td>
                <td>{{ $row['pembagian2_id']}}</td>
                <td>{{ $row['pembagian3_id']}}</td>
                <td>{{ $row['tgl_mulai_kerja']}}</td>
                <td>{{ $row['tgl_resign']}}</td>
                <td>{{ $row['gender']}}</td>
                <td>{{ $row['tgl_masuk_pertama']}}</td>
                <td>{{ $row['photo_path']}}</td>
                <td>{{ $row['tmp_img']}}</td>
                <td>{{ $row['nama_bank']}}</td>
                <td>{{ $row['nama_rek']}}</td>
                <td>{{ $row['no_rek']}}</td>
                <td>{{ $row['password_fio_desktop']}}</td>
                <td>{{ $row['status_login_fio_desktop']}}</td>
                <td>{{ $row['new_pegawai_id']}}</td>
                <td><a href="{{ route('pegawai.edit', $row ['pegawai_id'])}}" class="btn btn-xs btn-warning">UBAH</a>
                {{-- untuk membuat btn hapus --}}
                    <form action="{{ route('pegawai.destroy', $row['pegawai_id'])}}" method="post" style="display:inline"> 
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