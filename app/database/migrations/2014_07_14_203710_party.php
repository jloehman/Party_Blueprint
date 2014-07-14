<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Party extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('party', function($party)
		{
			$party->increments('id');
			$party->string('party_name', 30);
			$party->string('month', 15);
			$party->integer('date');
			$party->integer('year');
			$party->string('user_id');
			$party->integer('budget');

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('party');
	}

}
