<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Budget_item extends Eloquent implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'budget_items';

	static public $rules = [
    	'name' => 'required|max:100',
    	'cost' => 'required'
    ];

	public function parties()
	{
		$this->hasOne('Party');
	}

}