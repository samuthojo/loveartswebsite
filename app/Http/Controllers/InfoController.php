<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Info;


class InfoController extends Controller
{
    public function index()
    {
        $infos = Info::orderBy('created_at', 'desc')->get(); //paginate(10);
        return view('info.index', compact('infos'));
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

            return [
                "url" => $new_image_name,
                "color" => $img->limitColors(1)->pickColor(0, 0, 'hex')
            ];
        }

        $more_info = saveThumb($request);
        $url = null;
        $yt_id = $request->input('yt_id');

        $info = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'type' => $request->input('type'),
            'url' => $more_info['url'],
            'placeholder_color' => $more_info['color'],
            'yt_id' => $yt_id
        ];

        return Info::create($info);
//        return back()->withErrors(['msg','Please login first']);

//        return response()->json([
//            'success' => false,
//            'msg' => "You must be logged in to follow a house"
//        ]);
    }
}
