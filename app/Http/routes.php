<?php
use App\Keluhan;
use App\Permohonan;
use App\Kecamatan;
use App\Peruntukan;

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
	if(!isset($_COOKIE["username"])) {
		return redirect('login');	
	} else {
		// echo $_COOKIE[$cookie_name];
		$currentpage = 'home';
	    return view('home',compact('currentpage'));
	}
});

Route::get('login', function()
{
	if(!isset($_COOKIE["username"])) {
		$currentpage = 'login';
	    return view('login',compact('currentpage'));
	} else {
		// echo $_COOKIE[$cookie_name];
		return redirect('home');	
	}
});

Route::get('logout', function()
{
	unset($_COOKIE['username']);
    unset($_COOKIE['role']);
    setcookie('username', null, -1, '/');
    setcookie('role', null, -1, '/');
	return redirect ('login');
});

Route::post('login', function()
{
	$input = Request::all();
	// dd($input);
	if ($input['username']=='3576011309930005')
	{
		if ($input['password']=='ardi')
		{
        	$currentpage = 'home';	
        	// $username = $user[0]->nama_pengajar;
			$cookie_name = "username";
			$cookie_value = 'Tegar Aji Pangestu';
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			$cookie_name = "password";
			$cookie_value = $input['password'];
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			return redirect('home');
		}	
	}
	else if ($input['username']=='357601280420150005')
	{
		if ($input['password']=='ardi')
		{
        	$currentpage = 'home';	
        	// $username = $user[0]->nama_pengajar;
			$cookie_name = "username";
			$cookie_value = 'Yanfa Adi Putra';
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			$cookie_name = "password";
			$cookie_value = $input['password'];
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			return redirect('home');
		}	
	}
	else if ($input['username']=='admin')
	{
		if ($input['password']=='admin')
		{
        	// $currentpage = 'home';	
        	// $username = $user[0]->nama_pengajar;
			$cookie_name = "username";
			$cookie_value = $input['password'];
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			$cookie_name = "password";
			$cookie_value = $input['password'];
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			$currentpage = 'admin';
			return redirect('homeadmin');
		    // return redirect('admin');
		}	
	}
	$currentpage = 'login';
    return view('login',compact('currentpage'));
});

Route::get('homeadmin', function()
{
	$currentpage = 'admin';
    return view('admin/home',compact('currentpage'));
});

Route::get('terimaijin', function($id)
{
	$currentpage = 'admin';
    return view('admin/home',compact('currentpage'));
});

Route::get('unggahretribusi', function()
{
	$currentpage = 'unggah retribusi';
    return view('unggahretribusi',compact('currentpage'));
});

Route::get('unggahberkas', function()
{
	$currentpage = 'ajukanijin';
    return view('unggahberkas',compact('currentpage'));
});

Route::get('home', function()
{	
	$currentpage = 'home';
    return view('home',compact('currentpage'));
});

Route::get('ajukanijin', function()
{
	if(!isset($_COOKIE["username"])) {
		return redirect('login');	
	} else {
		// echo $_COOKIE[$cookie_name];
		$peruntukans = Peruntukan::all();
		$kecamatans = Kecamatan::all();
		$currentpage = 'ajukanijin';
	    return view('ajukanijin',compact('currentpage','kecamatans','peruntukans'));
	}
});


Route::get('peruntukanlahan/{id}', function($id)
{
		$peruntukanlahan = DB::table('ppl_imb_peruntukkan')
            ->join('ppl_imb_peruntukkan_lahan', 'ppl_imb_peruntukkan_lahan.id_peruntukkan', '=', 'ppl_imb_peruntukkan.id_peruntukkan')
            ->join('ppl_imb_kecamatan', 'ppl_imb_peruntukkan_lahan.id_kecamatan', '=', 'ppl_imb_kecamatan.id_kecamatan')
            ->where('ppl_imb_kecamatan.nama_kecamatan','=',$id)
            ->get();
//		$pengajar = Pengajar::where('id_pengajar' , '=', $id)->first();;
		return $peruntukanlahan;
});

Route::get('terimaijin/{id}', function($id)
{
	DB::table('ppl_imb_permohonans')
	            ->where('ppl_imb_permohonan_nomor', $id)
	            ->update(array('ppl_imb_statushak' => 'Diterima'));
	            return redirect('admintable');
});

Route::get('tolakijin/{id}', function($id)
{
	DB::table('ppl_imb_permohonans')
	            ->where('ppl_imb_permohonan_nomor', $id)
	            ->update(array('ppl_imb_statushak' => 'Ditolak'));
	            return redirect('admintable');
});

Route::get('keluhan', function()
{
	$keluhans = Keluhan::all();
	$currentpage = 'keluhan';
    return view('keluhan',compact('keluhans','currentpage'));
});


Route::get('showijin', function()
{
	$permohonans = DB::table('ppl_imb_permohonans')
	            ->join('ppl_imb_bangunans', 'ppl_imb_permohonans.bangunan_nomor', '=', 'ppl_imb_bangunans.nomor')
	            ->get();
	$currentpage = 'showijin';
    return view('showijin',compact('permohonans','currentpage'));
});

Route::get('myijin', function()
{
	if(!isset($_COOKIE["username"])) {
		return redirect('login');	
	} else {
		$permohonans = DB::table('ppl_imb_permohonans')
		            ->join('ppl_imb_bangunans', 'ppl_imb_permohonans.bangunan_nomor', '=', 'ppl_imb_bangunans.nomor')
		            ->where('username',$_COOKIE["username"])
		            ->get();
		$currentpage = 'myijin';
	    return view('ijinsaya',compact('permohonans','currentpage'));		
}

});

Route::get('retribusi', function()
{
	$currentpage = 'retribusi';
    return view('halamanretribusi',compact('currentpage'));
});

Route::post('permohonan', 'PermohonanController@store');
Route::post('keluhan', 'KeluhanController@store');

Route::post('unggahberkas', function(){
 //    $input = Input::file('buktitanah');
	// // echo $input;
	// if (Input::hasFile('buktitanah'))
	// {
	//     $input = Input::file('buktitanah');
	// 	$input->move(substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\',$input->getClientOriginalName());
	// 	echo $input;
	// }
	return view('FormIzin.formBerkas');
});

Route::get('printlaporan/{id}', function($id)
{
	$permohonans = DB::table('ppl_imb_permohonans')
    ->join('ppl_imb_bangunans', 'ppl_imb_permohonans.bangunan_nomor', '=', 'ppl_imb_bangunans.nomor')
    ->where('ppl_imb_permohonans.permohonan_nomor','=',$id)
    ->get();
//    dd($permohonans);
	return view('printlaporan.printlaporan',compact('permohonans'));
});

//Route::get('printlaporan/{$id}', function($id){
 //    $input = Input::file('buktitanah');
	// // echo $input;
	// if (Input::hasFile('buktitanah'))
	// {
	//     $input = Input::file('buktitanah');
	// 	$input->move(substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\',$input->getClientOriginalName());
	// 	echo $input;
	// }
	// return "Huba";
	// $permohonans = DB::table('permohonans')
 //    ->join('bangunans', 'permohonans.bangunan_nomor', '=', 'bangunans.nomor')
 //    ->where('permohonans.permohonan_nomor','=',$id)
 //    ->get();
 //    dd($permohonans);
	// return view('printlaporan.printlaporan',compact('permohonans'));
//});

Route::get('admintable', function()
	{
		$permohonans = DB::table('ppl_imb_permohonans')
            ->join('ppl_imb_bangunans', 'ppl_imb_permohonans.bangunan_nomor', '=', 'ppl_imb_bangunans.nomor')
            ->get();
		$currentpage = 'table';
		// dd($permohonans);
		return view('admin.table',compact('currentpage','permohonans'));
	});
Route::get('admincalendar', function()
	{
		$currentpage = 'calendar';
		return view('admin.calendar',compact('currentpage'));
	});
Route::get('adminchart', function()
	{
		$currentpage = 'chart';
		return view('admin.chart',compact('currentpage'));
	});
Route::get('adminfile-manager', function()
	{
		$currentpage = 'file-manager';
		return view('admin.file-manager',compact('currentpage'));
	});
Route::get('adminform', function()
	{
		$currentpage = 'form';
		return view('admin.form',compact('currentpage'));
	});
Route::get('admingallery', function()
	{
		$currentpage = 'gallery';
		return view('admin.gallery',compact('currentpage'));
	});
Route::get('adminicon', function()
	{
		$currentpage = 'icon';
		return view('admin.icon',compact('currentpage'));
	});
Route::get('adminlogin', function()
	{
		$currentpage = 'login';
		return view('admin.login',compact('currentpage'));
	});
Route::get('adminmessages', function()
	{
		$currentpage = 'messages';
		return view('admin.messages',compact('currentpage'));
	});
Route::get('adminsubmenu', function()
	{
		$currentpage = 'submenu';
		return view('admin.submenu',compact('currentpage'));
	});
Route::get('admintasks', function()
	{
		$currentpage = 'tasks';
		return view('admin.tasks',compact('currentpage'));
	});
Route::get('admintypography', function()
	{
		$currentpage = 'typography';
		return view('admin.typography',compact('currentpage'));
	});
Route::get('adminui', function()
	{
		$currentpage = 'ui';
		return view('admin.ui',compact('currentpage'));
	});
Route::get('adminwidgets', function()
	{
		$currentpage = 'widgets';
		return view('admin.widgets',compact('currentpage'));
	});

