<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyTable extends Migration {

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
			$party->time('end_time')->nullable();
			$party->string('location');
			$party->integer('user_id')->unsigned();
			$party->foreign('user_id')->references('id')->on('users');
			$party->decimal('budget', 8, 2);
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

