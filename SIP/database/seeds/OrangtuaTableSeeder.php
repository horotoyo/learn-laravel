<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class OrangtuaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker 		= Factory::create('id_ID');
        $santri     = DB::table('santri')->pluck('id');
        $gender     = ['L', 'P'];
        $pendidikan = [
            'SD', 'SLTP', 'SLTA', 'S1', 'S2', 'S3', 'D1', 'D2', 'D3', 'D4',
        ];
        $pekerjaan  = [
            'Buruh', 'Wirausahawan', 'Guru', 'Hacker', 'Developer', 'Mentri', 'DPR',
        ];

    	for ($i=0; $i < 15; $i++) { 
    		
    		$data[$i]	= [
    			'id_santri'	     	=> $faker->randomElement($santri),
    			'nik'			 	=> $faker->nik,
    			'nama'	            => $faker->name,
    			'gender'		    => $faker->randomElement($gender),
                'pendidikan'        => $faker->randomElement($pendidikan),
    			'pekerjaan'			=> $faker->randomElement($pekerjaan),
    			'created_at'		=> now(),
    			'updated_at'		=> now(),
    		];
    	}

        DB::table('orangtua')->truncate();
        DB::table('orangtua')->insert($data);
    }
}
