@extends('app')

@section('title')
TP/{{$utente->nickname}}

@stop

@section('content')
<h1>{{$utente->nickname}}</h1>
<div>
<ul>
	<li>{{$utente->id}}</li>
	<li>{{$utente->email}}</li>
</ul>
</div>
@stop

@section('footer')
<footer>
        <img alt="Marchio reggistrato" src="../jpg/MP.png">
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
@stop