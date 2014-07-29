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
       $users1->first_name = 'Jason';
       $users1->last_name = 'Loehman';
       $users1->email = 'jason@gmail.com';
       $users1->password = 'password';
       $users1->is_admin = false;
       $users1->save();

       $users2 = new User();
       $users2->first_name = 'Mallory';
       $users2->last_name = 'Weatherston';
       $users2->email = 'mallory@gmail.com';
       $users2->password = 'password';
       $users2->is_admin = false;
       $users2->save();

       $users3 = new User();
       $users3->first_name = 'Lindsey';
       $users3->last_name = 'Neubauer';
       $users3->email = 'lindsey@gmail.com';
       $users3->password = 'password';
       $users3->is_admin = false;
       $users3->save();
	}
}