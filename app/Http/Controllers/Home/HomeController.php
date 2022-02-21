<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        dd($request->all());
        $agent = new Agent();
        return view('home.index', compact('agent'));
    }
}
