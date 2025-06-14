<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.detailevent');
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

    public function detailevent()
    {
        $event = Event::all();

        $panitiaCounts = Apply::select('event_id', DB::raw('count(*) as total_panitia'))
        ->where('status', 'diterima')
        ->groupBy('event_id')
        ->pluck('total_panitia', 'event_id');


        return view('admin.detailevent', compact('event', 'panitiaCounts'));
    }

    public function panitevent()
{
    return view('admin.panitevent');
}

    public function eventnyaeo()
{
    return view('admin.eventnyaeo');
}

    public function detailvol()
{
    return view('admin.detailvol');
}

    public function detaileo()
{
    return view('admin.detaileo');
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
