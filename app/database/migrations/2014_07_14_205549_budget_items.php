<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BudgetItems extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('budget_items', function($budget)
		{
			$budget->increments('id');
			$budget->string('party_id', 30);
			$budget->string('name');
			$budget->integer('qty');
			$budget->decimal('cost', 5, 2);
			$budget->timestamps();

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('budget_items');
	}

}
