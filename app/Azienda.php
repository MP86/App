<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Azienda extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'aziende';
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['utente_id', 'nome', 'email', 'tipo', 'indirizzo', 'CAP'];
	
	public function preventivi()
	{
		return $this->hasMany('App\Preventivo');
	}
	
}
