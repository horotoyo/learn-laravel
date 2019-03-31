<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
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
        		'name' => 'Olahraga',
        		'created_at'	=> now(),
    			'updated_at'	=> now(),
        	],
        	[
        		'name' => 'Hoax',
        		'created_at'	=> now(),
    			'updated_at'	=> now(),
        	],
        	[
        		'name' => 'Pendidikan',
        		'created_at'	=> now(),
    			'updated_at'	=> now(),
        	],
        	[
        		'name' => 'Makanan',
        		'created_at'	=> now(),
    			'updated_at'	=> now(),
        	],
        	[
        		'name' => 'Politik',
        		'created_at'	=> now(),
    			'updated_at'	=> now(),
        	],
        ];
        DB::table('categories')->truncate();
        DB::table('categories')->insert($data);
    }
}
