<?php

use Illuminate\Database\Seeder;
use App\Model\SantriModel;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	SantriModel::truncate();
        SantriModel::insert([
        	[
        	'nama' 		=> 'Suryo',
        	'email' 	=> 'suryo@gmail.com',
        	'password'	=> bcrypt(123),
        	'gender' 	=> 1
        	],

        	[
        	'nama' 		=> 'Budi',
        	'email' 	=> 'budi@gmail.com',
        	'password'	=> bcrypt(456),
        	'gender' 	=> 1
        	],

        	[
        	'nama' 		=> 'Tina',
        	'email' 	=> 'tina@gmail.com',
        	'password'	=> bcrypt(789),
        	'gender' 	=> 0
        	],

        	[
        	'nama' 		=> 'Joko',
        	'email' 	=> 'joko@gmail.com',
        	'password'	=> bcrypt(123),
        	'gender' 	=> 1
        	],

        	[
        	'nama' 		=> 'Lisa',
        	'email' 	=> 'lisa@gmail.com',
        	'password'	=> bcrypt(123),
        	'gender' 	=> 0
        	],
        ]);
    }
}
