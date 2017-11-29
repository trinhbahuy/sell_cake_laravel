<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
            	'name' => 'huy',
            	'email' => 'huy@gmail.com',
            	'role' => '1',
            	'password' => bcrypt('123456')
            ],
            [
            	'name' => 'sơn ml',
            	'email' => 'son@gmail.com',
            	'role' => '0',
            	'password' => bcrypt('123456')
            ],
            [
            	'name' => 'bằng ml',
            	'email' => 'bang@gmail.com',
            	'role' => '0',
            	'password' => bcrypt('123456')
            ],
            [
            	'name' => 'khiêu ml',
            	'email' => 'khieu@gmail.com',
            	'role' => '0',
            	'password' => bcrypt('123456')
            ]
        ]);
    }
}
