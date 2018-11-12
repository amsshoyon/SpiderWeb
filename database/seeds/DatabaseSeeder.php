<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = DB::table('users')->insert([
			'username'   => 'ashoyon',                 //default username
			'user_type'   => '1',                      //2 for superadmin	
			'email'      => 'amsshoyon@gmail.com',     //default email
			'password'   => Hash::make('123456'),      //default password
			'name' => 'Abdullah Al Mamun',
			'phone'  => '',
			'image'  => '',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		$about = DB::table('abouts')->insert([
			'about'   => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',         
			'image'   => '',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

		$mission = DB::table('missions')->insert([
			'title'   => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. ',                 //default username
			'description'   => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);

    }
}

