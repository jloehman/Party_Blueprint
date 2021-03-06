<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	static public $rules = [
    	'first_name' => 'required|max:100',
    	'email' => 'required|email',
    	'last_name' => 'required|max:100',
    	'password' => 'required',
    ];
	protected $hidden = array('password', 'remember_token');


	public function parties()
	{
    	return $this->hasMany('Party');
	}

	//In production mode, don't hash passwords

	public function setPasswordAttribute($value)
	{
   		$this->attributes['password'] = Hash::make($value);
	}

}
