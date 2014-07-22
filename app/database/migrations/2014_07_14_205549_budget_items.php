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
			$budget->integer('party_id')->unsigned();
			$budget->string('name');
			$budget->integer('qty');
			$budget->decimal('cost', 7, 2);
			$budget->tinyInteger('is_purchased')->default(0);
			$budget->timestamps();
			$budget->foreign('party_id')->references('id')->on('parties');	
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
		{
			
    		$budget->drop('party_id');
		}
	}

}
