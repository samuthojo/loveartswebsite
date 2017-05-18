<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/homeSm', function () {
    return view('home-sm');
});

Route::get('/insta', function () {
//    return view('instagram');

    $songs = [
        [
            "title" => "If My Lungs Don't Fail",
            "album" => "Barua Kwa mpenzi",
            "length" => "03:13"
        ],
        [
            "title" => "Blue Dress Song",
            "album" => "Barua Kwa mpenzi",
            "length" => "03:12"
        ],
        [
            "title" => "Ethiopian Coffee",
            "album" => "Out n' About",
            "length" => "01:05"
        ],
        [
            "title" => "Don't Wanna Fight",
            "album" => "Out n' About",
            "length" => "03:25"
        ],
        [
            "title" => "Made Up Her Mind",
            "album" => "Out n' About",
            "length" => "04:02"
        ]
    ];


    for($i = 0; $i < count($songs); $i++){
        $song = $songs[$i];
        $lowerCaseTitle = strtolower($song['title']);
        $noApTitle = str_replace("'", "", $lowerCaseTitle);
        $noSpaceTitle = str_replace(" ", "-", $noApTitle);
        $src = $noSpaceTitle . ".mp3";
        $songs[$i]['src'] = asset('/music/') . '/' . $src;

        $lowerCaseAlbum = strtolower($song['album']);
        $noApAlbum = str_replace("'", "", $lowerCaseAlbum);
        $noSpaceAlbum = str_replace(" ", "-", $noApAlbum);
        $img = $noSpaceAlbum . ".jpg";
        $songs[$i]['artwork'] = asset('/music/') . '/' . $img;
    }


    return $songs;
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
