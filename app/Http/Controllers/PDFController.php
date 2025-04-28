<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function download($id)
    {
        $ticket = Ticket::with('event', 'user')->findOrFail($id);

        $pdf = Pdf::loadView('event.pdf', compact('ticket'));

        return $pdf->download('ticket-' . $ticket->id . '.pdf');
    }
}
