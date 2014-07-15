<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');

		// $this->call('GuestsSeeder');

		// $this->call('PartySeeder');

		// $this->call('TodoListSeeder');

		// $this->call('BudgetItemsSeeder');

	}
}

