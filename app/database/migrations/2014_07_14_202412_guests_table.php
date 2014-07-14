<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GuestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guests', function($guests)
		{
			$guests->increments('id');
			$guests->string('party_type', 20);
			$guests->string('first_last_name', 50);
		    $guests->string('email', 200)->unique();
		    $guests->string('number', 20);
		    $guests->string('rsvp', 5);
		    $guests->text('body');
		});

		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
				Schema::drop('guests');

	}

}
