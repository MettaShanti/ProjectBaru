<?php

namespace App\Http\Controllers;
use App\Models\Absenreport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    public function generatePdf(Request $request)
    {
        // Validasi input tanggal
        $request->validate([
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
        ]);

        $mulai = $request->input('tgl_mulai');
        $selesai = $request->input('tgl_selesai');

        // Ambil data berdasarkan range tanggal
        $result = Absenreport::whereBetween('scan_awal', [$mulai, $selesai])
                    ->orWhereBetween('scan_akhir', [$mulai, $selesai])
                    ->get();

        $data = [
            'title' => 'Laporan Absensi',
            'date' => date('d/m/Y'),
            'absenreport' => $result
        ];

        // Load view ke PDF
        $pdf = Pdf::loadView('generatepdf', $data);
        return $pdf->download('Laporan-Absensi.pdf');
    }
}


// yang ke 1
// class Pdfcontroller extends Controller
// {
//     public function generatePdf()
// {
//     $result = Absenreport::limit(50)->get();
//     $data = [
//         'title' => 'Laporan Absensi',  
//         'date' => date('m/d/Y'),       
//         'absenreport' => $result
//     ];

//     $pdf = Pdf::loadView('generatepdf', $data);
//     return $pdf->download('Laporan-Absensi.pdf');
// }

// }
