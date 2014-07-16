<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Todo extends Eloquent implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'todos';
	static public $rules = [
    	'title' => 'required|max:100'
    ];

	public function parties()
	{
		$this->hasOne('Party');
	}

}