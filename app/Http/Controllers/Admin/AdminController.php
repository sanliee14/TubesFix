<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        // Nanti bisa ambil data berita dari database
        return view('admin.news.index');
    }
}
