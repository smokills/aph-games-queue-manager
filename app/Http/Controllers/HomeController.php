<?php

namespace App\Http\Controllers;

use App\Queue;
use App\Station;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'stations' => Station::with(['games'])->get(),
            'queues' => Queue::all()
        ]);
    }
}
