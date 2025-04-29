<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class RequestedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $requestedEvents = Event::where('status', 'pending')->get();
    //     // $requestedCount = $requestedEvents->count(); 
    //     return view('admin.requested', ['requestedEvents' => $requestedEvents]);
    // }

    public function index()
    {
        $requestedEvents = Event::with('user')->where('status', 'pending')->get();
        $requestedCount = $requestedEvents->count(); 
        // dd( $requestedEvents);
        return view('admin.requested', [
            
            'requestedCount' => $requestedCount,
            'requestedEvents' => $requestedEvents
        
        ]);
    }

    public function requestedCount()
    {
        $count = Event::where('status', 'pending')->count();
       
        // dd( $requestedEvents);
        return view('partials.sidebar', [
            
            'requestedCount' => $requestedCount,
            'requestedEvents' => $requestedEvents
        
        ]);
    }
    public function approve($id)
    {
        $event = Event::findOrFail($id);
        $event->status = 'approved';
        $event->save();

        return redirect()->back()->with('success', 'Event approved successfully');
    }

    public function reject($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->back()->with('success', 'Event rejected successfully');
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
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
