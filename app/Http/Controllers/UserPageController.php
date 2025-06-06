<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPageController extends Controller
{

    public function alurPage()
    {
        return view('user.alur');
    }

    public function createEventPage()
    {
        return view('user.create_event');
    }
}
