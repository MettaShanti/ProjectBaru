<?php

namespace App\Http\Controllers;
use App\Models\Absenreport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class Pdfcontroller extends Controller
{
    public function generatePdf()
{
    $result = Absenreport::get();
    $data = [
        'title' => 'Laporan Absensi',  
        'date' => date('m/d/Y'),       
        'absenreport' => $result
    ];

    $pdf = Pdf::loadView('generatepdf', $data);
    return $pdf->download('Laporan-Absensi.pdf');
}

}
