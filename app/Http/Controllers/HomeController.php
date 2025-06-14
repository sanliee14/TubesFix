<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $totalEvent = Event::count();
        $totalEO = User::where('role', 'eo')->count();
        $totalPanitia = User::where('role', 'user')->count();

        return view('admin.dashboard', compact('totalEvent', 'totalEO', 'totalPanitia'));
    }
}
