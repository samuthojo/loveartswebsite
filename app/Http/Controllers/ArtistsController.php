<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

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

        return view('artists.single.index', compact('artist'));
    }

    public function insta($username)
    {
//        $client = new GuzzleHttp\Client();
//        $request = new \GuzzleHttp\Psr7\Request('GET', "https://www.instagram.com/$username/media/");
//        $promise = $client->sendAsync($request)->then(function ($response) {
//            echo 'I completed!</br>';
//            dd($response->getBody());
//        });
//        $promise->wait();
        $client = new Client(); //GuzzleHttp\Client
        $result = $client->get("https://www.instagram.com/$username/media/");
        return $result;
    }
}
