<?php

namespace App\Http\Controllers;

use App\Pillar;
use function foo\func;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\User;
use function PHPSTORM_META\map;
use Auth;
use Carbon\Carbon;
use Image;

class ArtistsController extends Controller
{

    public function index()
    {
        $artists = User::orderBy('created_at', 'desc')
          ->where('verified', true)
          ->where('role', '=', 0)->get(); //paginate(10);
        $filters = Pillar::all();
        return view('artists.index', compact('artists'), compact('filters'));
    }

    public function single($artist)
    {
        $artist = User::with('images')->where('id', '=', $artist)->first();
        return view('artists.single.index', compact('artist'));
    }

    public function setup_account()
    {
        $artist = Auth::user();
        $artist_pictures = $artist->images()->pluck('url')->toArray();
        $pillars = Pillar::orderBy('name')->get();
        $cur_step = 0;
        $all_done = false;
        $first_time = true;

        if(!isset($artist->gender) || is_null($artist->gender)) $cur_step = 0;
        else if(!isset($artist->pillar_id) || is_null($artist->pillar_id))  $cur_step = 1;
        else if(is_null($artist->video_url) || is_null($artist->portrait_url))
            $cur_step = 2;
        else if(
            is_null($artist->facebook_link) &&
            is_null($artist->instagram_link) &&
            is_null($artist->youtube_link) &&
            is_null($artist->twitter_link)
        )
            $cur_step = 3;
        else if(count($artist_pictures) < 1) $cur_step = 4;
        else
            return redirect()->intended('/');

        return view('artists.edit_profile', compact('artist','pillars', 'artist_pictures', 'cur_step', 'first_time', 'all_done'));
    }

    public function edit_profile()
    {
        $artist = Auth::user();
        $artist_pictures = $artist->images()->pluck('url')->toArray();
        $pillars = Pillar::orderBy('name')->get();
        $cur_step = 0;
        $all_done = false;

        if(!isset($artist->gender) || is_null($artist->gender)) $cur_step = 0;
        else if(!isset($artist->pillar_id) || is_null($artist->pillar_id))  $cur_step = 1;
        else if(is_null($artist->video_url) || is_null($artist->portrait_url))
            $cur_step = 2;
        else if(
            is_null($artist->facebook_link) &&
            is_null($artist->instagram_link) &&
            is_null($artist->youtube_link) &&
            is_null($artist->twitter_link)
        )
            $cur_step = 3;
        else if(count($artist_pictures) < 1) $cur_step = 4;
        else{
            $cur_step = 0;
            $all_done = true;
        }

        return view('artists.edit_profile', compact('artist','pillars', 'artist_pictures', 'cur_step', 'all_done'));
    }

    public function save_basic(Request $request)
    {
        $artist = Auth::user();
//        || !isset($request->dob)
        if(!isset($request->name) || !isset($request->email) || !isset($request->gender)){
            return response()->json([
                "success" => false,
                "msg" => "Some required fields are missing."
            ]);
        }else{
            $artist->name = !is_null($request->input('name')) ? $request->input('name') : null;
            $artist->email = !is_null($request->input('email')) ? $request->input('email') : null;
            $artist->gender = !is_null($request->input('gender')) ? $request->input('gender') : null;

           $artist->dob = $request->input('dob');

//            return $artist;
            if($artist->save()){
                return response()->json([
                    "success" => true,
                    "msg" => "Personal info successfully saved"
                ]);
            }else{
                return response()->json([
                    "success" => false,
                    "msg" => "Couldn't update your personal info."
                ]);
            }
            }
    }

    public function save_artistic(Request $request)
    {
        $artist = Auth::user();

        if(!isset($request->pillar_id) || !isset($request->simple_description) || !isset($request->description)  || !isset($request->art_quote)){
            return response()->json([
                "success" => false,
                "msg" => "Some required fields are missing."
            ]);
        }

        $artist->pillar_id = !is_null($request->pillar_id) ? $request->pillar_id : null;
        $artist->simple_description = !is_null($request->simple_description) ? $request->simple_description : null;
        $artist->description = !is_null($request->description) ? $request->description : null;
        $artist->art_quote = !is_null($request->art_quote) ? $request->art_quote : null;

        if($artist->save()){
            return response()->json([
                "success" => true,
                "msg" => "Artistic profile saved"
            ]);
        }else{
            return response()->json([
                "success" => false,
                "msg" => "Couldn't save your artistic profile"
            ]);
        }
    }

    public function save_works(Request $request)
    {
        $artist = Auth::user();
        $is_musician = strtolower($artist->type()-> name) == "music";

//        CHECK FOR EMPTY FIELDS
        if(
            empty($request->video_url) ||
            (is_null($artist->portrait_url) && ((!$is_musician && !$request->hasFile('work_picture')) ||
                ($is_musician && empty($request->portrait_url)))
            )
        )
            return response()->json([
                "success" => false,
                "msg" => "Some required fields are missing!"
            ]);

//        TRY SAVING
        $artist->video_url = str_replace("watch?v=", "embed/", $request->input('video_url'));

        if($is_musician)
            $artist->portrait_url = $request->input('portrait_url');
        else{
            if($request->hasFile('work_picture')){
                $work_picture = $request->file("work_picture");
                $destinationPath = public_path('images/artists/works/');
                $img = Image::make($work_picture->getRealPath());
                $new_image_name = $artist->id.'-'.time().'.'.$work_picture->getClientOriginalExtension();
                $img->save($destinationPath.$new_image_name,25);

                $artist->portrait_url = $new_image_name;
            }
        }

        if($artist->save()){
            return response()->json([
                "success" => true,
                "msg" => "Your recent works have been saved!"
            ]);
        }else{
            return response()->json([
                "success" => false,
                "msg" => "Couldn't save your recent works"
            ]);
        }
    }

    public function save_social_media(Request $request)
    {
        $artist = Auth::user();
        $artist->facebook_link = isset($request->facebook_link) ? $request->facebook_link : null;
        $artist->instagram_link = isset($request->instagram_link) ? $request->instagram_link : null;
        $artist->youtube_link = isset($request->youtube_link) ? $request->youtube_link : null;
        $artist->twitter_link = isset($request->twitter_link) ? $request->twitter_link : null;

        if(is_null($request->facebook_link) &&
            is_null($request->instagram_link) &&
            is_null($request->youtube_link) &&
            is_null($request->twitter_link)
        ){
            return response()->json([
                "success" => false,
                "msg" => "Please add atleast one link."
            ]);
        }

        if($artist->save()){
            return response()->json([
                "success" => true,
                "msg" => "Social media links saved"
            ]);
        }else{
            return response()->json([
                "success" => false,
                "msg" => "Couldn't save your social media links"
            ]);
        }
    }

    public function save_pictures(Request $request)
    {
        $artist = Auth::user();
        $user_pictures = $request->file("user_pictures");

        if(empty($user_pictures)){
            return response()->json([
                "success" => false,
                "msg" => "Please choose at least one image"
            ]);
        }

        $count = 0;
        $uploaded_images = [];

        foreach ($user_pictures as $image) {
            $destinationPath = public_path('images/artists/profile/');

            $img = Image::make($image->getRealPath());
            $new_image_name = $artist->id.'-'.time().$count.'.'.$image->getClientOriginalExtension();
            $img->save($destinationPath.$new_image_name,25);


            $artist_image = ['url' => $new_image_name];
            $new_image = $artist->images()->create($artist_image);

            if($new_image){
                $uploaded_images[] = $new_image;
            }

            $count++;
        }

        if(count($uploaded_images) === $count){
            return response()->json([
                "success" => true,
                "msg" => "All images successfully uploaded."
            ]);
        }else{
            return response()->json([
                "success" => false,
                "msg" => "Some images couldn't be uploaded."
            ]);
        }
    }
}
