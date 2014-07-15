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
		Schema::create('parties', function($party)
		{
			$party->increments('id');
			$party->string('party_name', 30);
			$party->date('event_date');
			$party->time('start_time');
			$party->time('end_time');
			$party->string('location');
			$party->string('user_id');
			$party->double('budget');
			$party->timestamps();

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parties');
	}

}
