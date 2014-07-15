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
			$todo->boolean('is_complete');
			$todo->dateTime('due_at');
			$todo->string('party_id');
			$todo->timestamps();
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
