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

	static public $rules = [
    	'party_name' => 'required|max:100',
    	'location' => 'required',
    	'event_date' => 'required',
    ];

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

	public function budgetItems()
	{
		$this->hasMany('BudgetItem');
	}


}