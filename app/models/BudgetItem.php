<?php


class BudgetItem extends Eloquent {

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

	public static function is_purchased()
	{
		return self::where('is_purchased', 1)->get();
	}

	public static function not_purchased()
	{
		return self::where('is_purchased', 0)->get();
	}

	

}