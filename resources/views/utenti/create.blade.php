@extends('regapp')

@section('title')
TP/Nuovo utente
@stop

@section('content')
<h1>Nuovo utente</h1>
<hr />
{!! Form::model($utente = new \App\Utente, array('action' => 'UtentiController@index')) !!}
	@include('utenti.form', ['submitButtonText' => 'Save', 'create' => true])
{!! Form::close() !!}

@include('errors.list')

@stop

@section('footer')
<footer>
        <img alt="Marchio reggistrato" src="../jpg/MP.png">
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
@stop