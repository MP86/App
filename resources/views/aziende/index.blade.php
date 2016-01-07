@extends('app')

@section('title')
Lista partecipanti
@stop

@section('content')
<h1>Partecipants</h1>
@if (count($partecipants))
<ul>
	@foreach ($partecipants as $partecipant)
		<div>
			<h2><a href="{{action('PartecipantsController@show', [$partecipant->id])}}">
					<ul>
						<li>{{$partecipant->name}}</li>
						<li>{{$partecipant->surname}}</li>
					</ul>
				</a>
			</h2>
			<ul>
				<li>{{$partecipant->id}}</li>
				<li>{{$partecipant->email}}</li>
				<li>{{$partecipant->phone_number}}</li>
			</ul>
		</div>
	@endforeach
</ul>
@else
<p>no partecipants</p>
@endif

@stop