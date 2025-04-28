<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = auth()->user()->tickets()->with(['event', 'user'])->get();

        return view('event.ticket', compact('tickets'));
    }
}
