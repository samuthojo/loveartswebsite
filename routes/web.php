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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/media', 'HomeController@media')->name('media');
Route::get('/media/{show}', 'HomeController@show')->name('show');
Route::get('/view_episode/{show}/{item}', 'HomeController@show_item')->name('show_item');

Route::get('/events', 'HomeController@events')->name('events');
Route::get('/events/{i}', 'HomeController@event')->name('event');
Route::get('/info', 'HomeController@infos')->name('infos');
Route::get('/info/{i}', 'HomeController@info')->name('info');

Route::get('/artists', 'ArtistsController@index')->name('artists');
Route::get('/artists/{i}', 'ArtistsController@single')->name('artist');
Route::get('/instaPics/{username}', 'ArtistsController@insta')->name('home');
