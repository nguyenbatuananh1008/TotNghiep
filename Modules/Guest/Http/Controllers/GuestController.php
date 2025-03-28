<?php

namespace Modules\Guest\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GuestController extends Controller
{
    public function index()
    {
        return view('guest::dashboard.index');
    }
}
