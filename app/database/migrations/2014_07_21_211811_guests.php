<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Guests extends Migration {

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
			$guests->integer('party_id')->unsigned();
			$guests->string('name', 50);
		    $guests->string('email', 200)->unique();
		    $guests->string('phone', 20);
		    $guests->boolean('plus')->nullable;
		    $guests->boolean('is_attending')->nullable();
		    $guests->text('comment')->nullable();
		    $guests->timestamps();

		    $guests->foreign('party_id')->references('id')->on('parties');
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
