@extends('app')

@section('title')
{{$user->name}}
@stop

@section('content')
<h1>{{$user->name}}</h1>
<ul>
	<li>{{$user->email}}</li>
	<li>{{$user->id}}</li>
	<li>{{$user->password}}</li>
</ul>
@stop