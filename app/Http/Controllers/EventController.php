<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
        $event = Event::where('nama_event', $name)->first();

        return view('user.daftar-panitia', compact('event'));
    }

    public function regiseo() {
        // $event = Event::where('nama_event', $name)->first();

        return view('EO.register');
    }

    public function eventterdaftar() {
        $events = Event::all();

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

    public function totalevent(){

        // $event = Event::where('user_id', Auth::id())->get();

        return view('admin.totalevent');
    }

    public function detailpendaftar(Request $request){
        $detail = Event::where('id',$request->id)->get();

        return view('EO.detail-pendaftar',compact('detail'));
    }

}
