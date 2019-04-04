<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
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
        		'name'		=> 'John Doe',
        		'email'		=> 'john@doe.com',
        		'password'	=> bcrypt(123),
        	],
        	[
        		'name'		=> 'Jane Doe',
        		'email'		=> 'jane@doe.com',
        		'password'	=> bcrypt(123),
        	]
        ];

        DB::table('users')->truncate();
        DB::table('users')->insert($data);
    }
}
