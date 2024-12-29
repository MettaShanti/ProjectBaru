<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        //return view('dashboard');       
        $absenreport = DB::select('SELECT absenreports.status, COUNT(*) as jumlah
            FROM absenreports
            GROUP BY absenreports.status');
        return view('dashboard')->with('absenreports', $absenreport);
    }
}

