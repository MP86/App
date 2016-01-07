<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problema extends Model
{
	protected $table = 'problemi';
	
	protected $fillable = ['utente_id', 'nome', 'foto', 'tipo', 'descrizione', 'indirizzo', 'CAP'];
	
	public function preventivi()
	{
		return $this->hasmany('App\Preventivo');
	}

	public function utente()
	{
		return $this->hasOne('App\Utente');
	}
}
