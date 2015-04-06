<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'permohonans';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'luastanah', 'statushak', 'pemeganghak','kategori','jenisbangunan'];

}
