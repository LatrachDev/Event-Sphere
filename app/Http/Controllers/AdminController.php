<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalEvents = Event::count();

        $requestedCount = Event::where('status', 'pending')->count();

        $now = Carbon::now();
        $monthLater = Carbon::now()->addDays(30);

        $incomingEvents = Event::whereBetween('start_time', [$now, $monthLater])->count();
        $pastEventsCount = Event::where('start_time', '<', Carbon::now())->count();

        return view('admin.dashboard', compact('totalUsers', 'totalEvents', 'requestedCount', 'incomingEvents', 'pastEventsCount'));
    }
}
