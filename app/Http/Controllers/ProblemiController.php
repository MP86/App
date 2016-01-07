<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProblemiRequest;
use App\Problema;
use Illuminate\Http\JsonResponse;

class ProblemiController extends Controller
{	
	public function __construct() {
		//$this->middleware('auth', ['only' => 'index']);
	}
	
	public function utente()
	{
		return view('problemi.utente');
	}
	
	public function azienda()
	{
		return view('problemi.azienda');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
    public function index(Request $request)
    {
    	$problemi = Problema::latest()->get();
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($problemi);
    	}
    	return view('problemi.index', compact('problemi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('problemi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProblemiRequest $request)
    {
    	//$problema = Problema::create($request->all()); // farebbe prendere tutti i dati delle request
    	$dati = $request->all();
    	//$dati["ruolo"] = "azienda";
    	 
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($problema);
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
    public function show(Problema $problema)
    {
    	return view('problemi.show', compact('problema'));
    }
    
    public function utenteshow(Preventivo $preventivo)
    {
    	return view('problemi.azienda');
    }
    
    public function aziendashow(Preventivo $preventivo)
    {
    	return view('problemi.azienda');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Problema $problema)
    {
    	return view('problemi.edit', compact('problema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProblemiRequest $request, Problema $problema)
    {
    	$problema->update($request->all());
    	
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($problema);
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
    public function destroy(Request $request, Problema $problema)
    {
    	$problema->delete();
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($problema);
    	}
    	return redirect('problemi.utente');
    }
}
