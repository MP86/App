<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preventivo extends Model
{
	protected $table = 'preventivi';
	
	protected $fillable = ['data_scadenza', 'azienda_id', 'problema_id', 'pdf', 'descrizione', 'prezzo'];
	
	public function problema()
	{
		return $this->hasOne('App\Problema');
	}
}
