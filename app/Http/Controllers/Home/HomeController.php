<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $agent = new Agent();
        return view('home.index', compact('agent'));
    }

    public function zalo(Request $request)
    {
        $agent = new Agent();
        return view('channel.zalo', compact('agent'));
    }
}
