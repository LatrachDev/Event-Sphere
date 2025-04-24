<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class UserEventController extends Controller
{
    public function home()
    {
        $allEvents = Event::all()->paginate(5);

        return view('home');
    }
}
