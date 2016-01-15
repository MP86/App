<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
	public function companies()
	{
		return $this->belongsTo('App\Company');
	}
	
	public function problems()
	{
		return $this->belongsToMany('App\Problem');
	}
	
}
