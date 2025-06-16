<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Apply;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $totalEvent = Event::count();
        $totalEO = User::where('role', 'eo')->count();
        $totalPanitia = Apply::where('status', 'diterima')->count();

        $usersOverTime = User::where('role', 'user')
        ->selectRaw("created_at as time, COUNT(*) as count")
        ->groupBy('time')
        ->orderBy('time')
        ->get();

        return view('admin.dashboard', compact('totalEvent', 'totalEO', 'totalPanitia','usersOverTime'));
    }
}
