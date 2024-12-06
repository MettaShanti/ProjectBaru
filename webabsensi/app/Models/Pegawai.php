<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = ['pegawai_id', 'pegawai_pin', 'pegawai_nip','pegawai_nama','pegawai_alias',
                            'pegawai_pwd','pegawai_rfid','pegawai_privilege','pegawai_telp','pegawai_status',
                            'tempat_lahir','tgl_lahir','pembagian1_id','pembagian2_id','pembagian3_id',
                            'tgl_mulai_kerja','tgl_resign','gender','tgl_masuk_pertama','photo_path',
                            'tmp_img','nama_bank','nama_rek','no_rek','password_fio_desktop','status_login_fio_desktop','new_pegawai_id'];
                            
    protected $primaryKey = 'pegawai_id';
}
