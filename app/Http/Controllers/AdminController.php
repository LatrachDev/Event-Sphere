<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $eventsStatus = [
            'approved' => Event::where('status', 'approved')->count(),
            'pending' => Event::where('status', 'pending')->count(),
        ];

        $year = Carbon::now()->year;
        $monthlyEventsCount = DB::table('events')
            ->select(DB::raw('MONTH(start_time) as month'), DB::raw('COUNT(*) as total'))
            ->whereYear('start_time', Carbon::now()->year)
            ->groupBy(DB::raw('MONTH(start_time)'))
            ->pluck('total', 'month')
            ->toArray();

            $eventsPerMonth = [];
            for ($x = 1; $x <= 12; $x++)
            {
                $eventsPerMonth[] = $monthlyEventsCount[$x] ?? 0;
            }
        return view('admin.dashboard', compact('totalUsers', 'totalEvents', 'requestedCount', 'incomingEvents', 'pastEventsCount', 'eventsPerMonth', 'year', 'eventsStatus'));
    }
}
