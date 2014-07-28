<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Guest extends Eloquent implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'guests';


	static public $rules = [
    	'name' => 'required|max:100',
    	'email' => 'required|email',
    	'phone' => 'required',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

    public function setCommentAttribute($value)
    {
        $this->attributes['comment'] = ucfirst($value);
    }


	public function parties()
	{
		return $this->hasOne('Party');
	}

}