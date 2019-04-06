<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class SantriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker 		= Factory::create('id_ID');

    	for ($i=0; $i < 15; $i++) { 
    		
    		$data[$i]	= [
    			'nisn'				=> $faker->numberBetween($min = 1000, $max = 9000),
    			'nama'				=> $faker->name,
    			'tempat_lahir'		=> $faker->city,
    			'tanggal_lahir'		=> $faker->dateTime,
    			'alamat'			=> $faker->address,
    			'created_at'		=> now(),
    			'updated_at'		=> now(),
    		];
    	}

        DB::table('santri')->truncate();
        DB::table('santri')->insert($data);
    }
}
