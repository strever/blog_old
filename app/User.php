<?php namespace App;

use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * {@inheritDoc}
	 */
	protected $fillable = [
		'username',
		'email',
		'password',
		'permissions',
	];

	/**
	 * Array of login column names.
	 *
	 * @var array
	 */
	protected $loginNames = ['username', 'email'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

}
