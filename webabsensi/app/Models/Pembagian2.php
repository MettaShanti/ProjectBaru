<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembagian2 extends Model
{
    use HasFactory;
    protected $fillable = ['pembagian2_id','pembagian2_nama','pembagian2_ket'];
    protected $primaryKey = 'pembagian2_id';
}
