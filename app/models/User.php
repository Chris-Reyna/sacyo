<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	//Validation rules for our properties
	static public $rules =[
		'firstname' => 'required | max:50',
		'lastname' => 'required | max:50',
		'relationship' => 'required | max:20',
		'email' => 'required | email | unique:users,email_address',
		'address' => 'required | max:100',
		'password' => 'required | min:8,max:12',
		'phone' => 'required | max:10'


		
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

		/**
	*Relationship for many posts
	*/
	public function posts()
	{						  //model name
	    return $this->hasMany('Post');
	}

		/**
	*Relationship for many children
	*/
	public function children()
	{						  //model name
		return $this->hasMany('Child');
	}

	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}
