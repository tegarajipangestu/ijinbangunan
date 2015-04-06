<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonanBangunanAndBerkas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bangunans', function(Blueprint $table) {
			$table->increments('nomor');
			$table->string('jenis');
			$table->string('lokasi');
			$table->integer('luas');
			$table->timestamps();
		});		
		Schema::create('berkas', function(Blueprint $table) {
			$table->increments('id_ajuan');
			$table->string('kategori');
			$table->string('lokasifile');
			$table->timestamps();
		});		
		Schema::create('permohonans', function(Blueprint $table) {
			$table->increments('nomor');
			$table->string('username');
			$table->integer('luastanah');
			$table->string('statushak');
			$table->string('pemeganghak');
			$table->string('kategori');
			$table->string('jenisbangunan');						
			$table->integer('bangunan_nomor')->unsigned();
			$table->foreign('bangunan_nomor')->references('nomor')->on('bangunans')->onDelete('cascade');
			$table->integer('berkas_id_ajuan')->unsigned();	
			$table->foreign('berkas_id_ajuan')->references('id_ajuan')->on('berkas')->onDelete('cascade');
			$table->timestamps();
		});		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('permohonan');
		Schema::drop('bangunan');
		Schema::drop('berkas');
	}

}
