<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserEventController extends Controller
{
    public function home()
    {
        $allEvents = Event::orderBy('start_time', 'desc')->paginate(5);

        $categories = Category::all();
        
        $now = Carbon::now();
        $monthLater = Carbon::now()->addDays(30);

        $incomingEvents = Event::whereBetween('start_time', [$now, $monthLater])->count();
        $pastEventsCount = Event::where('start_time', '<', Carbon::now())->count();


        return view('home', compact(['allEvents', 'incomingEvents', 'pastEventsCount', 'categories']));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id); 
        return view('event.details', compact('event'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');
    
        $events = Event::query();
    
        if (!empty($search)) {
            $events->where(function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%")
                    ->orWhere('description', 'LIKE', "%$search%");
            });
        }
    
        if (!empty($category)) {
            $events->where('category_id', $category);
        }
    
        $allEvents = $events->orderBy('start_time', 'desc')->paginate(5); // ✅ final result into $allEvents
    
        $categories = Category::all();
        $now = Carbon::now();
        $monthLater = Carbon::now()->addDays(30);
    
        $incomingEvents = Event::whereBetween('start_time', [$now, $monthLater])->count();
        $pastEventsCount = Event::where('start_time', '<', Carbon::now())->count();
    
        return view('home', compact('allEvents', 'categories', 'incomingEvents', 'pastEventsCount'));
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

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_time' => 'required|date',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'number_of_tickets' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        
        if ($request->hasFile(('image'))) {

            $path = $request->file('image')->store('images', 'public');
            
            $data['image'] = $path;
        }

        if (auth()->user()->role == 'admin') {
            $data['status'] = 'approved';
            
        } else {
            $data['status'] = 'pending';
        }
        
        $events = Event::create($data);
        
        return redirect()->back()->with('success', 'Event created successfully');
    }

}
