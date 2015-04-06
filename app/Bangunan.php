<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bangunan extends Model {

		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'bangunans';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['jenis', 'lokasi', 'luas'];


}
