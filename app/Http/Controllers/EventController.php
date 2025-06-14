<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Apply;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        // $events = Event::where('user_id', '!=', Auth::id())->get();
        $events = Event::all();

        return view('user.event', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'mulai' => 'required|date',
            'selesai' => 'required|date|after_or_equal:mulai',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,svg'
        ]);

        $path = $request->file('gambar')->store('event', 'public');

        $status = $request->mulai >= $request->selesai ? 'selesai' : 'belum selesai';

        Event::create([
            'nama_event' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->mulai,
            'tanggal_selesai' => $request->selesai,
            'lokasi' => $request->lokasi,
            'status' => $status,
            'url_gambar' => $path,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('eo.dashboard')->with('success','Event telah dibuat');
    }

    public function create()
{
    return view('eo.daftarevent');
}

    public function show(string $name) {
        $events = Event::where('nama_event', $name)->first();

        return view('user.daftar-panitia', compact('events'));
    }

    public function regiseo() {
        // $event = Event::where('nama_event', $name)->first();

        return view('EO.register');
    }

    public function eventterdaftar() {
        $events = Event::where('user_id', Auth::id())->get();

        return view('EO.eventeo', compact('events'));
    }

    public function hapusevent(Request $request){
        Event::where('id', $request->id)->delete();

        return redirect(route('eo.dashboard'))->with('delete','Event berhasil dihapus');
    }

    public function totevent(Request $request){
        Event::where('id', $request->id)->delete();

        return redirect(route('admin.totalevent'))->with('delete','Event berhasil dihapus');
    }

    public function pendaftar(){

        $event = Event::where('user_id', Auth::id())->get();

        return view('EO.pendaftar',compact('event'));
    }


    public function detailpendaftar(Request $request){
        $detail = Apply::where('event_id',$request->id)->get();

        return view('EO.detail-pendaftar',compact('detail'));
    }

    public function daftarPanitia(Request $request){

        $request->validate([
            'posisi' => 'required|string|max:255',
            'alasan' => 'required|string|max:255'
        ]);

        $check = Apply::where('user_id', Auth::id())
                  ->where('event_id', $request->id)
                  ->first();

        if ($check) {
            return back()->with('error', 'Kamu sudah mendaftar ke event ini.');
        }

        Apply::create([
            'event_id' => $request->id,
            'posisi' => $request->posisi,
            'alasan' => $request->alasan,
            'status' => 'menunggu',
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('user.events')->with('success','Terimakasih sudah mendaftar');
    }
}
