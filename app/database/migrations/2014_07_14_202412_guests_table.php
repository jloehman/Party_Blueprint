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
			$guests->string('party_id', 20);
			$guests->string('name', 50);
		    $guests->string('email', 200)->unique();
		    $guests->string('phone', 20);
		    $guests->boolean('is_attending', 5);
		    $guests->text('comment');
		    $guests->timestamps();
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
