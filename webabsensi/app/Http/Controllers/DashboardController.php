<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
                       
        //$absenreport = DB::select('SELECT Status, COUNT(*) AS jumlah FROM absenreportsn GROUP BY Status');
        //return view('dashboard')->with('absenreportsn', $absenreport);
    }
}
