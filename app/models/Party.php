<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Party extends Eloquent implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'parties';

	public function users()
	{
		$this->hasOne('User');
	}

	public function guests()
	{
		$this->hasMany('Guest');
	}

	public function todos()
	{
		$this->hasMany('Todo');
	}


}