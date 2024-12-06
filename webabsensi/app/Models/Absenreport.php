<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absenreport extends Model
{
    use HasFactory;
    protected $fillable = ['pegawai_id','Pin','Nip','Nama','Jabatan','Departemen','Divisi','Tanggal','Bulan'
                            ,'Hari','Scan_awal','Scan_akhir','Status','Jam_Kerja'];
}
