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
});

Auth::routes();

Route::group(['middleware' => ['web', 'guest']], function () {
    Route::get('login/{driver}', 'SocialLoginController@redirectToProvider');
    Route::get('login/{driver}/callback', 'SocialLoginController@handleProviderCallback');

    Route::get('/login', function () {
        return view('login');
    });
});


//Route::group(['middleware' => ['web', 'guest']], function () {
//    Route::get('admin', 'AdminController@index');

    Route::get('/admin', function () {
        return view('admin.index');
    });
//});


Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/media', 'MediaController@index')->name('media');
Route::get('/media/{show}', 'HomeController@show')->name('show');
Route::get('/view_episode/{show}/{item}', 'HomeController@show_item')->name('show_item');

Route::get('/events', 'EventsController@index')->name('events');
Route::post('/saveEvent', 'EventsController@store')->name('create-event');
Route::get('/info', 'InfoController@index')->name('infos');
Route::post('/saveInfo', 'InfoController@store')->name('create-info');

Route::get('/artists', 'ArtistsController@index')->name('artists');
Route::get('/artists/{artist}', 'ArtistsController@single')->name('artist');
Route::get('/instaPics/{username}', 'ArtistsController@insta')->name('home');
