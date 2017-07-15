<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;

class MediaController extends Controller
{
    public function index()
    {
        $shows = Media::all();
        return view('media', compact('shows'));
    }
}
