<?php

namespace App\Http\Controllers;

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
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about.index');
    }

    public function contact()
    {
//        return view('home');
    }

    public function media()
    {
        return view('media');
    }

    public function show($show)
    {
        return view('media.show', compact('show'));
    }

    public function show_item($show, $item)
    {
        return view('media.show_item', compact('show', 'item'));
    }

    public function events()
    {
        return view('events.index');
    }

    public function event($i)
    {
        return view('events.single', compact('i'));
    }

    public function infos()
    {
        return view('info.index');
    }

    public function info($i)
    {
        return view('info.single', compact('i'));
    }
}
