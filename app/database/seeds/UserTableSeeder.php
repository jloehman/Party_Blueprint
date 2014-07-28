<?php

class UserTableSeeder extends DatabaseSeeder {
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
       $users1->first_name = 'jason';
       $users1->last_name = 'loehman';
       $users1->email = 'jason@gmail.com';
       $users1->password = 'password';
       $users1->is_admin = false;
       $users1->save();

       $users1 = new User();
       $users1->first_name = 'mallory';
       $users1->last_name = 'wetherston';
       $users1->email = 'mallory@gmail.com';
       $users1->password = 'password';
       $users1->is_admin = false;
       $users1->save();

       $users1 = new User();
       $users1->first_name = 'lindsey';
       $users1->last_name = 'neubauer';
       $users1->email = 'lindsey@gmail.com';
       $users1->password = 'password';
       $users1->is_admin = false;
       $users1->save();
	}
}