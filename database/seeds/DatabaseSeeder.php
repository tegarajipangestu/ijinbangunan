<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('bangunans')->delete();

        $projects = array(
            ['jenis' => 'Bangunan Permanen 1', 'lokasi' => 'project-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['jenis' => 'Bangunan Bertingkat', 'lokasi' => 'project-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['jenis' => 'Bangunan Tidak Bertingkat', 'lokasi' => 'project-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['jenis' => 'Bangunan Los', 'slug' => 'project-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('projects')->insert($projects);	}

}
