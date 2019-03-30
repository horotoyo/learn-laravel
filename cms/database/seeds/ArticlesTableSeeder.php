<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker 		= Factory::create('id_ID');
        $users_id	= DB::table('users')->pluck('id');

        for ($i=0; $i<20; $i++) { 
        	$data[$i] = [
        		'user_id'	=> $faker->randomElement($users_id),
        		'title'		=> $faker->sentence(3),
        		'content'	=> $faker->paragraphs(3, true),
        	];
        }

        DB::table('articles')->truncate();
        DB::table('articles')->insert($data);
    }
}
