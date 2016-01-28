<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->truncate();
        
		factory(App\User::class)->create([
				'name'=>'Jorge',
				'email'=>'jfernandez@abrhil.com',
				'role'=>'admin',
				'password'=>'esminombre300*'
		]);

		factory(App\User::class,49)->create();
    }
}
