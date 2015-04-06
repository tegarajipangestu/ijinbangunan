<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'PageController@home');
//Route::get('ajukanijin', 'PageController@ajukanijin');


//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', function()
{
    return view('home');
});

Route::get('home', function()
{
    return view('home');
});

Route::get('ajukanijin', function()
{
    return view('ajukanijin');
});

Route::get('showijin', function()
{
    return view('showijin');
});

Route::get('retribusi', function()
{
    return view('halamanretribusi');
});

Route::post('permohonan', 'PermohonanController@store');

Route::any('form-submit', function(){
	return view('FormIzin.formBerkas');
});

