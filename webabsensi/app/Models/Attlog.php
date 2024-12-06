<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attlog extends Model
{
    use HasFactory;
    protected $fillable = ['sn','scan_date','pin','verifymode','inoutmode','reserved','work_code','att_id'];
}
