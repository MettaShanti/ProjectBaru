<?php

namespace App\Http\Controllers;

use App\Models\Absenreport;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

    // Mendapatkan bulan dan tahun saat ini
    $currentMonth = date('m');
    $currentYear = date('Y');

    // Query untuk mendapatkan data kehadiran berdasarkan bulan saat ini dengan nama bulan
    $absenreport = DB::select('
    SELECT MONTHNAME(absenreports.Tanggal) as bulan, absenreports.status, COUNT(*) as jumlah 
    FROM absenreports
    WHERE MONTH(absenreports.Tanggal) = ? AND YEAR(absenreports.Tanggal) = ?
    GROUP BY MONTHNAME(absenreports.Tanggal), absenreports.status
', [$currentMonth, $currentYear]);

    // Mengirim data ke view
    return view('dashboard')->with('absenreports', $absenreport);

        //return view('dashboard');       
        // $absenreport = DB::select('SELECT absenreports.status, COUNT(*) as jumlah
        //     FROM absenreports
        //     GROUP BY absenreports.status');
        // return view('dashboard')->with('absenreports', $absenreport);
    }
}

