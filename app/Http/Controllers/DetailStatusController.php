<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return view('user.status');
    }

    public function detail()
    {
        return view('eo.detail_status');
    }

}