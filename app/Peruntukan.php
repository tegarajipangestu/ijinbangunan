<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Peruntukan extends Model {

	//
	protected $table = 'ppl_imb_peruntukkan';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id_peruntukan', 'peruntukkan'];

}
