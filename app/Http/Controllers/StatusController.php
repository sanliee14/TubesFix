<?php

namespace App\Http\Controllers;
use App\Models\Apply;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    public function index()
    {
        $applies = Apply::with('events')
                ->where('user_id', Auth::id())
                ->get();


        return view('user.status',compact('applies'));
    }

    public function detail(Request $request)
    {
        $data = Event::with(['applies' => function ($query) {
            $query->where('user_id', Auth::id());
        }])->find($request->id); // Lebih ringkas pakai find()

        if (!$data) {
            abort(404, 'Event tidak ditemukan');
        }

        return view('user.detail_status', compact('data'));
    }

    public function terima(Request $request)
    {
        $applies = Apply::where('id_apply', $request->id_apply)->first();

        if (!$applies) {
            return redirect()->back()->with('error', 'Data pendaftar tidak ditemukan.');
        }

        $applies->update([
            'status' => 'diterima'
        ]);

        return redirect()->route('eo.pendaftar')->with('success', 'Pendaftar berhasil diterima.');
    }

    public function tolak(Request $request)
    {
        $applies = Apply::where('id_apply', $request->id_apply)->first();

        if (!$applies) {
            return redirect()->back()->with('error', 'Data pendaftar tidak ditemukan.');
        }

        $applies->update([
            'status' => 'ditolak'
        ]);

        return redirect()->route('eo.pendaftar')->with('success', 'Pendaftar berhasil ditolak.');
    }


}
