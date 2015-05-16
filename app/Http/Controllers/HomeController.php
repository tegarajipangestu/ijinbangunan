<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Request $req)
	{
		$currentpage = 'home';
	    return view('home',compact('currentpage'));
	}

	public function check() {
		$currentpage = 'home';
        return view('check',compact('currentpage'));
    }
    
    public function validateLogin(Request $request)
 	{
 		$r = $request->all();
        if (Auth::attempt(['nik' => $r['nik'], 'password' => $r['password']])) {
            // return Auth::user();
        	dd('huba');
            return redirect('/home');
        }
        return redirect('/login');
 	}
 	public function logout() 
 	{
        Auth::logout();
		return redirect('/home');
 	}
}
