<?php

class Party extends Eloquent {

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