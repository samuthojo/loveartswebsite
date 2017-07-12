<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Image;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('date', 'desc')->get(); //paginate(10);
        return view('events.index', compact('events'));
    }

    public function store(Request $request)
    {
        function saveThumb(Request $request){
            $image = $request->file('image_url');

            $destinationPath = public_path('images/events/');
            $img = Image::make($image->getRealPath());
            $new_image_name = time().'.'.$image->getClientOriginalExtension();
            $img->save($destinationPath.$new_image_name,20);

            $destinationPath = public_path('images/events/thumbs/');
            $thumb_path = $destinationPath.$new_image_name;

            $img->resize(rand (400, 800), null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumb_path,20);

            return $new_image_name;
        }

        $event = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => $request->input('start_date'),
            'location' => $request->input('location'),
            'poster' => saveThumb($request)
        ];

        return Event::create($event);
    }
}
