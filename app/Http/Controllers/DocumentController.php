<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        return view('pages.document.home');
    }

    public function category()
    {
        return view('pages.document.category');
    }

    public function detail()
    {
        return view('pages.document.detail');
    }
}
