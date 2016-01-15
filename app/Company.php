<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Company extends Model implements AuthenticatableContract,
	                                   AuthorizableContract,
	                                   CanResetPasswordContract
	{
    use Authenticatable, Authorizable, CanResetPassword;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'category', 'address', 'number', 'cap',
	];
	
	
	public function users()
	{
		return $this->hasOne('App\User');
	}
	
	public function estimates()
	{
		return $this->hasMany('App\Estimate');
	}
	
	public function categories()
	{
		return $this->belongsToMany('App\Category');
	}
}
