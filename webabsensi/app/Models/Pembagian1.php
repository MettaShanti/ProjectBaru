<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembagian1 extends Model
{
    use HasFactory;
    protected $fillable = ['pembagian1_id', 'pembagian1_nama', 'pembagian1_ket'];
    protected $primaryKey = 'pembagian1_id';
}
