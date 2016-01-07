<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Utente;
use App\Http\Requests\UtentiRequest;
use Illuminate\Http\JsonResponse;

class UtentiController extends Controller
{	
	public function __construct() {
		//$this->middleware('auth', ['only' => 'index']);
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
	public function index(Request $request)
	{
		$utenti = Utente::latest()->get();
		if ($request->ajax() || $request->wantsJson()) {
			return new JsonResponse($utenti);
		}
		return view('utenti.index', compact('utenti'));
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('utenti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UtentiRequest $request)
    {
        $dati = $request->all();
        $dati["ruolo"] = "utente"; //per inserire il ruolo controllare...
        
        $utente = Utente::create($dati);
        
        if ($request->ajax() || $request->wantsJson()) {
            return new JsonResponse($utente);
        }
        
        flash()->success('salvato con successo!');
        
        return redirect('problemi.utente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Utente $utente)
    {
    	return view('utenti.show', compact('utente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Utente $utente)
    {
    	return view('utente.edit', compact('utente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UtentiRequest $request, Utente $utente) //utente o utenti request
    {
    	$utente->update($request->all());
    	 
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($utente);
    	}
    	 
    	flash()->success('aggiornato con successo!');
    	 
    	return redirect('problemi.utente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Utente $utente)
    {
    	$utente->delete();
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($utente);
    	}
    	return redirect('utenti.create');
    }
}
