<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Apply;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

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

    public function panitevent(Request $request)
{
    $detailEvent = Event::where('id',$request->id)->get();
    $panitiaCounts = Apply::select('event_id', DB::raw('count(*) as total_panitia'))
        ->where('status', 'diterima')
        ->groupBy('event_id')
        ->pluck('total_panitia', 'event_id');
    return view('admin.panitevent',compact('detailEvent','panitiaCounts'));
}

    public function eventnyaeo(Request $request)
{
    $event = Event::where('user_id',$request->id)->get();
    return view('admin.eventnyaeo',compact('event'));
}

    public function detailvol()
{
    $user = Apply::with('user')
    ->with('events')
    ->where('status','diterima')
    ->get();

    return view('admin.detailvol',compact('user'));
}

    public function detaileo()
{
    $panitia = User::where('role','eo')->get();
    return view('admin.detaileo',compact('panitia'));
}

public function delete(Request $request){
    Event::where('id',$request->id)->delete();

    return redirect(route('admin.detaileo'))->with('success','Event berhasil dihapus');
}
}
