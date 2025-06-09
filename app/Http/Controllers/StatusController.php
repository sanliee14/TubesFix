<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('user.status',compact('events'));
    }

    public function detail(Request $request)
    {
        $data = Event::where('id',$request->id)->get();

        return view('user.detail_status',compact('data'));
    }

}
