<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TodoList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('todos', function($todo)
		{
			$todo->increments('id');
			$todo->string('name');
			$todo->date('done_by');
			$todo->boolean('is_complete');
			$todo->timestamps();
			$todo->integer('party_id')->unsigned();
			$todo->foreign('party_id')->references('id')->on('parties');	

		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('todos');

	}

}
