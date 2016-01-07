<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Preventivo;
use App\Http\Requests\PreventiviRequest;
use Illuminate\Http\JsonResponse;

class PreventiviController extends Controller
{	
	public function __construct() {
		//$this->middleware('auth', ['only' => 'index']);
	}
	
    public function utente()
	{
		return view('preventivi.utente');
	}
	
	public function azienda()
	{
		return view('preventivi.azienda');
	}
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
    public function index(Request $request)
    {
    	$preventivi = Preventivo::latest()->get();
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($preventivi);
    	}
    	return view('preventivi.index', compact('preventivi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('preventivi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreventiviRequest $request)
    {
    	//$preventivo = Preventivo::create($request->all()); // farebbe prendere tutti i dati delle request
    	$dati = $request->all();
    	//$dati["ruolo"] = "azienda";
    	
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($preventivo);
    	}
    	flash()->success('salvato con successo!');
    	
    	return redirect('preventivi.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Preventivo $preventivo)
    {
    	return view('preventivi.show');
    }
    
    public function utenteshow(Preventivo $preventivo)
    {
    	return view('preventivi.utenteshow');
    }
    
    public function aziendashow(Preventivo $preventivo)
    {
    	return view('preventivi.aziendashow');
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Preventivo $preventivo)
    {
    	return view('preventivi.edit', compact('preventivi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PreventiviRequest $request, Preventivo $preventivo)
    {
    	$preventivo->update($request->all());
    	 
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($preventivo);
    	}
    	 
    	flash()->success('aggiornato con successo!');
    	 
    	return redirect('preventivi.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Preventivo $preventivo)
    {
    	$preventivo->delete();
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($preventivo);
    	}
    	return redirect('problemi.azienda');
    }
}
