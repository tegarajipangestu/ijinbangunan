<?php
use App\Keluhan;
use App\Permohonan;
use App\Kecamatan;
use App\Peruntukan;
use Carbon;

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
// Route::get('/', 'HomeController@check');
// Route::get('/home', 'HomeController@index');

// Route::post('/login', 'HomeController@validateLogin');
// Route::get('logout', 'HomeController@logout');

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
	if ($input['nik']=='budi')
	{
		if ($input['password']=='budi')
		{
        	$currentpage = 'home';	
        	// $username = $user[0]->nama_pengajar;
			$cookie_name = "username";
			$cookie_value = 'Budi';
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			$cookie_name = "password";
			$cookie_value = $input['password'];
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			return redirect('home');
		}	
	}
	else if ($input['nik']=='3576011309930005')
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
	else if ($input['nik']=='admin')
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
	if(!isset($_COOKIE["username"])) {
		return redirect('login');	
	} else {
		// echo $_COOKIE[$cookie_name];
		$currentpage = 'home';
	    return view('home',compact('currentpage'));
	}
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
	            ->where('ppl_imb_permohonans.permohonan_nomor', $id)
	            ->update(array('ppl_imb_permohonans.statushak' => 'Diterima'));
	            return redirect('admintable');
});

Route::get('perpanjangijin/{id}', function($id)
{
	DB::table('ppl_imb_permohonans')
	            ->where('ppl_imb_permohonans.permohonan_nomor', $id)
	            ->update(array('ppl_imb_permohonans.statushak' => 'Proses Perpanjangan','<ppl_imb_permohonans class="updated_at"></ppl_imb_permohonans>' => Carbon::now()));
	            return redirect('myijin');
});

Route::post('tambahperuntukkan', function()
{
	$input = Request::all();
	// dd($input);
	$result1 = DB::table('ppl_imb_peruntukkan')
	            ->where('ppl_imb_peruntukkan.peruntukkan', $input['peruntukkan'])
	            ->first();		            
	$result2 = DB::table('ppl_imb_kecamatan')
	            ->where('ppl_imb_kecamatan.nama_kecamatan', $input['kecamatan'])
	            ->first();		            

	// dd($result->peruntukkan);
	DB::table('ppl_imb_peruntukkan_lahan')
	            ->insert(['ppl_imb_peruntukkan_lahan.id_kecamatan' => $result2->id_kecamatan, 'ppl_imb_peruntukkan_lahan.id_peruntukkan' => $result1->id_peruntukkan]);
	return redirect('bangunantable');
});

Route::post('updateperuntukkan', function()
{
	$input = Request::all();
	// dd($input);
	DB::table('ppl_imb_peruntukkan_lahan')
	            ->where('ppl_imb_peruntukkan_lahan.id_peruntukkan', $input['id_peruntukkan'])
	            ->where('ppl_imb_peruntukkan_lahan.id_kecamatan', $input['id_kecamatan'])
	            ->delete();
	$result = DB::table('ppl_imb_peruntukkan')
	            ->where('ppl_imb_peruntukkan.peruntukkan', $input['peruntukkan'])
	            ->first();		            
	// dd($result->peruntukkan);
	DB::table('ppl_imb_peruntukkan_lahan')
	            ->insert(['ppl_imb_peruntukkan_lahan.id_kecamatan' => $input['id_kecamatan'], 'ppl_imb_peruntukkan_lahan.id_peruntukkan' => $result->id_peruntukkan]);
	return redirect('bangunantable');
});

Route::get('tolakijin/{id}', function($id)
{
	DB::table('ppl_imb_permohonans')
	            ->where('ppl_imb_permohonans.permohonan_nomor', $id)
	            ->update(array('ppl_imb_permohonans.statushak' => 'Ditolak'));
	            return redirect('admintable');
});

Route::get('showperuntukkan/{id}', function($id)
{
	$result = DB::table('ppl_imb_kecamatan')
	            ->where('ppl_imb_kecamatan.id_kecamatan', $id)
	            ->get();
    return $result;
});

Route::get('deletebangunan/{id_peruntukkan}/{id_kecamatan}', function($id_peruntukkan,$id_kecamatan)
{
	DB::table('ppl_imb_peruntukkan_lahan')
	            ->where('ppl_imb_peruntukkan_lahan.id_kecamatan','=' ,$id_kecamatan)
	            ->where('ppl_imb_peruntukkan_lahan.id_peruntukkan','=' ,$id_peruntukkan)
	            ->delete();
	            return redirect('bangunantable');
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
	$result = DB::table('ppl_imb_permohonans')
    ->join('ppl_imb_bangunans', 'ppl_imb_permohonans.bangunan_nomor', '=', 'ppl_imb_bangunans.nomor')
    ->where('ppl_imb_permohonans.permohonan_nomor','=',$id)
    ->first();
   // dd($result);
    		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		//Set Margin
		$pdf->SetMargins(PDF_MARGIN_LEFT, 20, PDF_MARGIN_RIGHT);

		$pdf->SetPrintHeader(false);
		$pdf->SetPrintFooter(false);

		$pdf->AddPage();
		$judul_laporan 	= '<br><h1 align="center" style="font-size: 250%;">Laporan Perijinan</h1> <br>';
		$judul_laporan.= '<h1 align="center"> Dinas Tata Ruang Kota Bandung </h1><br>';
		$pdf->writeHTMLCell(0, 0, '', '', $judul_laporan, 0, 1, 0, true, '', true);
		$gambar 		= '<br><br><br><br><br><br><div align="center"><img src="../images/logo_laporan.png" alt="Bandung-logo" style="width:382px;height:320px"></div>';
		$pdf->writeHTMLCell(0, 0, '', '', $gambar, 0, 1, 0, true, '', true);
		$bawah	= '<br><br><br><br><h1 align="center" style="font-size: 200%;"> BANDUNG </h1>';
		$pdf->writeHTMLCell(0, 0, '', '', $bawah, 0, 1, 0, true, '', true);

		

		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		$pdf->SetHeaderData('', 0, 'Dinas Tata Ruang', 'Kota Bandung', array(0,64,255), array(0,64,128));
		$pdf->setFooterData(array(0,64,0), array(0,64,128));

		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		$pdf->SetAutoPageBreak(TRUE, 13);

		$pdf->SetFont('times', '', 12, '', true);

		$pdf->SetPrintHeader();
		$pdf->startPageGroup();
		$pdf->AddPage();
		$pdf->SetPrintFooter();
		$html = '';
		$title = '<h4 align="center" style="font-size: 200%;">Surat Keputusan</h4><br><br><br>';
		$opening = 'Sesuai nomor permohonan <b>Distarcip/2015/IMB/01/'.$result->permohonan_nomor.'</b>, dengan saya yang bertanda tangan di bawah ini : <br><br>';
		$humbala1 = '<div style="margin-left:100px">      Nama 		: 	Dra. Kamalia Purbani, MT</div><br>';
		$humbala2 = '      Jabatan 	: 	Kepala Dinas Tata Ruang Kota Bandung<br><br></div>';
		$humbala3 = 'Dengan ini  memberikan ijin mendirikan bangunan kepada : <br><br>';
		$username 	= '	<div style="margin-left:64px">      Nama Pemohon 	: '.$result->username.'<br>';
		$nama 		= '      Nama Pemegang Hak 	: '.$result->pemeganghak.'<br>';
		$tanggal 	= '      Tanggal 	: '.$result->updated_at.'<br>';
		$jenis = '      Jenis 	: '.$result->jenis.'<br>';
		$lokasi = '      Lokasi 	: '.$result->lokasi.'<br>';
		$kategori = '      Kategori 	: '.$result->kategori.'<br><br></div>';
		$humbala4 = 'Surat ini berlaku saat tanggal ditetapkan dan akan ditinjau kembali jika ada kekeliruan<br><br><br><br><br>';
		$humbala5 = 'Ditetapkan di Bandung, 18 Mei 2015<br>Kepala Dinas Tata Ruang Kota Bandung<br><br><br><br><br>Dra. Kamalia Purbani, MT<br>';

		// $html = $judul.$lokasi.$nama.$tanggal.$instansi.$telepon.$isi.$status;
		$html = $title.$opening.$humbala1.$humbala2.$humbala3.$username.$nama.$tanggal.$jenis.$lokasi.$kategori.$humbala4.$humbala5;		
		// $html = $permohonan_nomor.$username;
		// Print text using writeHTMLCell()
		$pdf->writeHTMLCell(0, 0, '', '', $html, 1, 1, 0, true, '', true);
		$pdf->Output('Laporan.pdf', 'I');		

	// return view('printlaporan',compact('result'));
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
Route::get('bangunantable', function()
	{
		$permohonans = DB::table('ppl_imb_peruntukkan')
            ->join('ppl_imb_peruntukkan_lahan', 'ppl_imb_peruntukkan_lahan.id_peruntukkan', '=', 'ppl_imb_peruntukkan.id_peruntukkan')
            ->rightjoin('ppl_imb_kecamatan', 'ppl_imb_peruntukkan_lahan.id_kecamatan', '=', 'ppl_imb_kecamatan.id_kecamatan')
            ->get();
		$peruntukkans = DB::table('ppl_imb_peruntukkan')
            ->get();

		$currentpage = 'bangunan';
		// dd($permohonans);
		return view('admin.bangunan',compact('currentpage','permohonans','peruntukkans'));
	});

Route::get('tambahperuntukkan', function()
	{
		$peruntukkans = DB::table('ppl_imb_peruntukkan')
            ->get();

		$kecamatans = DB::table('ppl_imb_kecamatan')
            ->get();

		$currentpage = 'bangunan';
		// dd($permohonans);
		return view('admin.tambahperuntukkan',compact('currentpage','peruntukkans','kecamatans'));
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

