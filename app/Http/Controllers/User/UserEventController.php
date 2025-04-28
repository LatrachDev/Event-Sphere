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

    public function show($id)
    {
        $event = Event::findOrFail($id); 
        return view('event.details', compact('event'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $events = Event::where('title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orderBy('start_time', 'desc')
            ->paginate(5);

        return view('home', compact('events'));
    }
    public function filter(Request $request)
    {
        $category = $request->input('category');
        $events = Event::where('category_id', $category)
            ->orderBy('start_time', 'desc')
            ->paginate(5);

        return view('home', compact('events'));
    }

    public function incomingEvents()
    {
        $now = Carbon::now();
        $monthLater = Carbon::now()->addDays(30);

        $incomingEvents = Event::whereBetween('start_time', [$now, $monthLater])->paginate(5);

        return view('event.incoming', compact('incomingEvents'));
    }

    public function pastEvents()
    {
        $pastEvents = Event::where('start_time', '<', Carbon::now())->paginate(5);

        return view('event.closed', compact('pastEvents'));
    }

}
