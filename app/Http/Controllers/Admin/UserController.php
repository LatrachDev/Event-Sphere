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
        $users = User::withCount('events')->where('role', '!=', 'admin')->paginate(5);
        // $users = User::where('role' !== 'admin')->paginate(5);
        // dd($users);
        $activeUsers = User::where('status', 'active')->count();
        $bannedUsers = User::where('status', 'banned')->count();
        $totalEvents = Event::count();

        $requestedCount = Event::where('status', 'pending')->count();

        return view('admin.users', compact('totalUsers', 'activeUsers', 'bannedUsers', 'totalEvents', 'requestedCount', 'users'));
    }

    public function toggleStatus($id)
    {
        $user = User::findOrFail($id);

        $user->status = $user->status === 'active' ? 'banned' : 'active';
        $user->save();

        return back()->with('success', 'User status updated successfully.');
    }


}
