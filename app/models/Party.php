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

     public function setPartyNameAttribute($value)
    {
        $this->attributes['party_name'] = ucfirst($value);
    }

     public function setLocationAttribute($value)
    {
        $this->attributes['location'] = ucfirst($value);
    }

	public function users()
	{
		return $this->hasOne('User');
	}

	public function guests()
	{
		return $this->hasMany('Guest');
	}

	public function todos()
	{
		return $this->hasMany('Todo');
	}

	public function budgetItems()
	{
		return $this->hasMany('BudgetItem');
	}

	public function budgetItemsPurchasedTotal()
	{
		return $this->budgetItems()->where('is_purchased', true)->sum('cost');
	}


}