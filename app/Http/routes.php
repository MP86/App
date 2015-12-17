<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('contatti', function () {
    return view('contatti');
});

Route::resource('amministratori','AmministratoriController');

Route::resource('utenti','UtentiController');

Route::resource('aziende','AziendeController');

Route::resource('problemi','ProblemiController');

Route::resource('preventivi','PreventiviController');