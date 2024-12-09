<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');       
        // $absenreport = DB::select('SELECT Status, COUNT(*) AS jumlah FROM absenreport GROUP BY Status');
        // return view('dashboard')->with('absenreport', $absenreport);
    }
}

