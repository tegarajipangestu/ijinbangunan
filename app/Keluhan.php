<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'keluhans';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nama', 'email','isikeluhan', 'tanggal'];

}
