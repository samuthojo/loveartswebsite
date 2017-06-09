<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index()
    {
        return view('artists.index');
    }

    public function single($i)
    {
        $artists_str = '[{name: "James Nyole"},{name: "Kimberly James"}, {name: "Emmanuel Nyagawa"},
            {name: "Ashumta Kingi"}, {name: "Mgosi Amile"}, {name: "Catheryn Thomas Massamu"},
            {name: "Edgar Bwigane"}, {name: "Balinze Mokti"}, {name: "Sharukh Kacha"},
            {name: "Michael Lukemi"}, {name: "Millian Kilawe"}, {name: "Gasper Kiluvyo"}
        ]';

        $artists = json_decode($artists_str);
        $artist = $artists[$i];

        return view('artists.single', compact('artist'));
    }
}
