<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

$s = 'public.';
Route::get('/',         ['as' => $s . 'home',   'uses' => 'PagesController@getHome']);


Route::get('baca/{slug}','SummernoteController@bacanih');
//Route::get('{namakategori}','SummernoteController@kategori');

//Route::get('tulis','SummernoteController@tulis');

$s = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\SocialController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\SocialController@getSocialHandle']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth:administrator'], function()
{
	$a = 'admin.';
	Route::get('/', ['as' => $a . 'home', 'uses' => 'AdminController@getHome']);
	Route::get('tulis', ['as' => $a . 'tulis', 'uses' => 'SummernoteController@tulis']);
	Route::post('insert', ['as' => $a . 'insert', 'uses' =>'SummernoteController@insert']);
	Route::post('updatejuga', ['as' => $a . 'updatejuga', 'uses' =>'SummernoteController@updatenih']);
	Route::get('lihat', ['as' => $a . 'lihat', 'uses' =>'SummernoteController@lihat']);
	Route::get('edit/{id}', ['as' => $a . 'edit/{id}', 'uses' =>'SummernoteController@editnih']);



});

Route::group(['prefix' => 'user', 'middleware' => 'auth:user'], function()
{
	$a = 'user.';
	Route::get('/', ['as' => $a . 'home', 'uses' => 'UserController@getHome']);

});

Route::group(['middleware' => 'auth:all'], function()
{
	$a = 'authenticated.';
	Route::get('/logout', ['as' => $a . 'logout', 'uses' => 'Auth\LoginController@logout']);
	Route::get('/activate/{token}', ['as' => $a . 'activate', 'uses' => 'ActivateController@activate']);
	Route::get('/activate', ['as' => $a . 'activation-resend', 'uses' => 'ActivateController@resend']);
});

Auth::routes(['login' => 'auth.login']);
