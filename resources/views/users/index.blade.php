@extends('app')

@section('title')
Index
@stop

@section('content')
<h1>Users</h1>
@if (count($users))
<ul>
	@foreach ($users as $user)
		<user>
			<h2><a href="{{action('UsersController@show', [$user->id])}}">{{$user->name}}</a><h2>
			<ul>
				<li>{{$user->email}}</li>
				<li>{{$user->id}}</li>
				<li>{{$user->password}}</li>
			</ul>
		</user>
	@endforeach
</ul>
@else
<p>no users</p>
@endif

@stop