<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model {

	//
	protected $table = 'kecamatan';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id_kecamatan', 'nama_kecamatan'];

}
