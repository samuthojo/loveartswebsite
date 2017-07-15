<?php

namespace App\Http\Controllers;

use App\Pillar;
use function foo\func;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\User;
use function PHPSTORM_META\map;

class ArtistsController extends Controller
{
    public function index()
    {
        $artists = User::orderBy('created_at', 'desc')->where('role', '=', 0)->get(); //paginate(10);
        $filters = Pillar::all();
        return view('artists.index', compact('artists'), compact('filters'));
    }

    public function single($artist)
    {
        $artist = User::with('images')->where('id', '=', $artist)->first();
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
