@extends('app')

@section('title')
TP/Modifica utente
@stop

@section('content')
<h1>Edit partecipant </h1>
<hr />
{!! Form::model($partecipant, ['method' => 'PATCH', 'action' => ['PartecipantsController@update', $partecipant->id]]) !!}
	@include('partecipants.form', ['submitButtonText' => 'Update', 'create' => false])
{!! Form::close() !!}

@include('errors.list')

@stop

@section('footer')
<footer>
        <img alt="Marchio reggistrato" src="../jpg/MP.png">
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
@stop