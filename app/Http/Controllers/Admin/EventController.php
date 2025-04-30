<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::paginate(5);
        $categories = Category::all();
        $requestedCount = Event::where('status', 'pending')->count();
        return view('admin.events', compact(['events', 'categories', 'requestedCount']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
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

        $data['user_id'] = auth()->id(); 

        if (auth()->user()->role == 'admin') {
            $data['status'] = 'approved';
            
        } else {
            $data['status'] = 'pending';
        }
        
        $events = Event::create($data);
        
        return redirect()->back()->with('success', 'Event created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
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
        
        $event->update($data);
        return redirect()->back()->with('success', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->back()->with('success', 'Event deleted successfully');
    }
}
