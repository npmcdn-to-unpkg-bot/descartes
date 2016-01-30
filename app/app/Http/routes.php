<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::resource('emoticons', 'EmoticonsController');
Route::resource('feelings', 'FeelingsController');

Route::model('emoticon', 'Emoticon');
Route::model('feeling', 'Feeling');

Route::bind('emoticons', function($value, $route) {
	return App\Emoticon::whereSlug($value)->first();
});

Route::bind('feelings', function($value, $route) {
	return App\Feeling::whereSlug($value)->first();
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
