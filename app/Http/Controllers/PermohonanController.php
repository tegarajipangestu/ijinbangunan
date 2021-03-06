<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Bangunan;
use App\Permohonan;
use App\Berkas;


use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Request;

class PermohonanController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();
//		dd($input);
		$bangunan = new Bangunan;
		$bangunan->jenis = $input['jenis'];
		$bangunan->lokasi = $input['lokasi'];
		$bangunan->kategori = $input['kategori'];
		$bangunan->luas = $input['luas'];
		$bangunan->save();
		$berkas = new Berkas;
		$berkas->kategori = "Denah";
		// $berkas->lokasifile = $input['file'];		
		$berkas->save();
		$permohonan = new Permohonan;
		$permohonan->username = $input['username'];
		$permohonan->pemeganghak = $input['pemeganghak'];
		$permohonan->statushak = 'Diproses';
		$bangunantemp = Bangunan::where('lokasi' , $bangunan->lokasi)->first();
		// $berkastemp = Berkas::where('lokasifile' , $berkas->lokasifile)->first();
//		$bangunantemp = Bangunan::findOrFail($bangunan->lokasi);
		$permohonan->bangunan_nomor = $bangunantemp['nomor'];
		$permohonan->berkas_id_ajuan = 1;
		$permohonan->save();
		setcookie('bangunan',$bangunan->jenis, time() + (86400 * 30), "/"); // 86400 = 1 day
		return redirect('unggahberkas');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
