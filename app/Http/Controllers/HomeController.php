<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;



class HomeController extends Controller
{
    public function index(){
        $events = Event::orderBy('created_at', 'desc')->take(4)->get();
        // dd($events);
        
        $comedy_events = Event::where('category', 'Comedy')->take(4)->get();
        $sports = Event::where('category', 'Sports')->take(4)->get();
        $concerts = Event::where('category', 'Concert')->take(4)->get();
        $others = Event::where('category', 'Others')->take(4)->get();
        
        // dd($events);
        return view('index', compact(['events', 'comedy_events', 'sports', 'concerts', 'others']));
    }

    public function dashboard () {
        return view('dashboard.index');
    }
}
