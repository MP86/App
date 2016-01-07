@extends('regapp')

@section('title')
TP/Nuova azienda
@stop

@section('content')
<h1>Nuova azienda</h1>
<hr />
{!! Form::model($szienda = new \App\Azienda, array('action' => 'AziendeController@index')) !!}
	@include('aziende.form', ['submitButtonText' => 'Save', 'create' => true])
{!! Form::close() !!}

@include('errors.list')

@stop

@section('footer')
<footer>
        <img alt="Marchio reggistrato" src="../jpg/MP.png">
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
@stop