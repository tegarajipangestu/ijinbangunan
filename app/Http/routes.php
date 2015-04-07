<?php
use App\Keluhan;
use App\Permohonan;

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
	$currentpage = 'home';
    return view('home',compact('currentpage'));
});

Route::get('ajukanijin', function()
{
	$currentpage = 'ajukanijin';
    return view('ajukanijin',compact('currentpage'));
});

Route::get('keluhan', function()
{
	$keluhans = Keluhan::all();
	$currentpage = 'keluhan';
    return view('keluhan',compact('keluhans','currentpage'));
});


Route::get('showijin', function()
{
	$permohonans = DB::table('permohonans')
	            ->join('bangunans', 'permohonans.bangunan_nomor', '=', 'bangunans.nomor')
	            ->get();
	$currentpage = 'showijin';
    return view('showijin',compact('permohonans','currentpage'));
});

Route::get('retribusi', function()
{
	$currentpage = 'retribusi';
    return view('halamanretribusi',compact('currentpage'));
});

Route::post('permohonan', 'PermohonanController@store');
Route::post('keluhan', 'KeluhanController@store');

Route::any('form-submit', function(){
	return view('FormIzin.formBerkas');
});

