<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\AziendeRequest;
use App\Azienda;
use Illuminate\Http\JsonResponse;

class AziendeController extends Controller
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
    	$aziende = Azienda::latest()->get();
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($aziende);
    	}
    	return view('aziende.index', compact('aziende'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('aziende.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AziendeRequest $request)
    {
    	//$azienda = Azienda::create($request->all()); // farebbe prendere tutti i dati delle request
    	$dati = $request->all();
    	$dati["ruolo"] = "azienda"; //per inserire il ruolo controllare...
    	$dati["utente_id"] = ['utente' => "id"]; //fare in modo che l'id del utente diventi utente_id
    	
    	$azienda = Azienda::create($dati);
    	
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($azienda);
    	}
    	
    	flash()->success('salvato con successo!');
    	
    	return redirect('problemi.azienda');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Azienda $azienda)
    {
    	return view('aziende.show', compact('aziende'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Azienda $azienda)
    {
    	return view('aziende.edit', compact('azienda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AziendeRequest $request, Azienda $azienda) //utente o utenti request
    {
    	$azienda->update($request->all());
    	 
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($azienda);
    	}
    	 
    	flash()->success('aggiornato con successo!');
    	 
    	return redirect('problemi.aziende');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Azienda $azienda)
    {
    	$azienda->delete();
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($azienda);
    	}
    	return redirect('aziende.create');
    }
}
