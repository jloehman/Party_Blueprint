<?php

class UserTableSeeder extends Seeder {
	public function run()
	{
		DB::table('users')->delete();

       $users = new User();
       $users->first_name = 'admin';
       $users->last_name = 'admin';
       $users->email = 'admin@simplesoiree.com';
       $users->password = 'partytime';
       $users->is_admin = true;
       $users->save();

       $users1 = new User();
       $users1->first_name = 'me';
       $users1->last_name = 'you';
       $users1->email = 'me@gmail.com';
       $users1->password = 'password';
       $users1->is_admin = false;
       $users1->save();
	}
}