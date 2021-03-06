<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ppl_imb_berkas';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['kategori', 'lokasifile'];

}
