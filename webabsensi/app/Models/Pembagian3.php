<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembagian3 extends Model
{
    use HasFactory;
    protected $fillable = ['pembagian3_id','pembagian3_nama','pembagian3_ket'];
    protected $primaryKey = 'pembagian3_id';
}
