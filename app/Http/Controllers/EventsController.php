<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('date', 'desc')->get(); //paginate(10);
        return view('events.index', compact('events'));
    }

    public function detail(Event $event)
    {
        return view('events.single', compact('event'));
    }
}
