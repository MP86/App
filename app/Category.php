<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public function problems()
	{
		return $this->belongsToMany('App\Problem');
	}
	
	public function companies()
	{
		return $this->belongsToMany('App\Company');
	}
}
