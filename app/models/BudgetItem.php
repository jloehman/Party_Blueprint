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
    	'cost' => 'required|numeric',
    	'qty' => 'numeric'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

	public function parties()
	{
		return $this->hasOne('Party');
	}

	public static function is_purchased()
	{
		return self::where('is_purchased', 1)->get();
	}

	public static function not_purchased()
	{
		return self::where('is_purchased', 0)->get();
	}

	public static function budget_for_party_not_purchased($id)
	{
		return self::where('party_id', $id)->where('is_purchased', 0)->orderBy('id','desc')->get();
	}
	
	public static function budget_for_party_purchased($id)
	{
		return self::where('party_id', $id)->where('is_purchased', 1)->orderBy('id','desc')->get();
	}
	

}