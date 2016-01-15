<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	public function categories()
	{
		return $this->belongsToMany('App\Category');
	}
	
	public function estimates()
	{
		return $this->belongsToMany('App\Estimate');
	}
}
