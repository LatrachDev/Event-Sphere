<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserEventController extends Controller
{
    public function home()
    {
        // $allEvents = Event::paginate(5);
        $allEvents = Event::orderBy('start_time', 'desc')->paginate(5);
        $totalEvents = Event::count();
        
        $now = Carbon::now();
        $monthLater = Carbon::now()->addDays(30);

        $incomingEvents = Event::whereBetween('start_time', [$now, $monthLater])->count();
        $pastEventsCount = Event::where('start_time', '<', Carbon::now())->count();


        return view('home', compact(['allEvents', 'incomingEvents', 'pastEventsCount', 'totalEvents']));
    }
}
