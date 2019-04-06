<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
        		'nama' 		 => 'Suryo',
        		'email'		 => 'suryo@gmail.com',
        		'password'	 => bcrypt('suryo'),
                'created_at' => now(),
        	],
        	[
        		'nama' 		=> 'Adib',
        		'email'		=> 'adib@gmail.com',
        		'password'	=> bcrypt('adib'),
                'created_at' => now(),
        	]
        ];

        DB::table('pengguna')->truncate();
        DB::table('pengguna')->insert($data);
    }
}
