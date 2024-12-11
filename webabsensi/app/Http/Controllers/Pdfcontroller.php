<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class Pdfcontroller extends Controller
{
    public function generatePdf()
    {
        $data =[
            'title' => 'uji coba',
            'date' => date('m/d/Y')
        ];
        $pdf = Pdf::loadView('generatepdf', $data);
        return $pdf->download('invoice.pdf');
    }
}
