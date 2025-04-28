<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to Laravel PDF Generation',
            
            'date' => date('m/d/Y')
        ];
        $pdf = \PDF::loadView('pdf.invoice', $data);
        return $pdf->download('invoice.pdf');
    }
}
