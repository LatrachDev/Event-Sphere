<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // public function index()
    // {
    //     return view('admin.users');
    // }

    public function index()
    {
        $totalUsers = User::count();
        $activeUsers = User::where('status', 'active')->count();
        $bannedUsers = User::where('status', 'banned')->count();
        $totalEvents = Event::count();

        return view('admin.users', compact('totalUsers', 'activeUsers', 'bannedUsers', 'totalEvents'));
    }

    public function userEvents($id)
    {
        $user = User::findOrFail($id);
        $event_count = $user->events()->count();
        return view('admin.users', compact('user', 'event_count'));
    }
}
