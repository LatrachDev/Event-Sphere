<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalEvents = Event::count();

        return view('admin.dashboard', compact('totalUsers', 'totalEvents'));
    }
}
