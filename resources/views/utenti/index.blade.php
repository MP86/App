@extends('app')

@section('title')
TP/Utenti
@stop

@section('content')
<h1 class="page-header">Utenti</h1>

<h2 class="sub-header">Lista utenti:</h2>
@if (count($utenti))
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Nickname</th>
					<th>Email</th>
					<th>Ruolo</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($utenti as $utente)
					<tr>
						<td><a href="{{action('UtentiController@show', [$utente->id])}}">{{$utente->id}}</a></td>
						<td>{{$utente->nickname}}</td>
						<td>{{$utente->email}}</td>
						<td>{{$utente->ruolo}}</td>
						<td><a href="{{action('UtentiController@edit', [$utente->id])}}" class="btn btn-primary">Update</a></td>
						<td>
							{!! Form::open(array('url' => 'utenti/'. $utente->id)) !!}
			                    {!! Form::hidden('_method', 'DELETE') !!}
			                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
			                {!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@else
<p>no utenti</p>
@endif
@stop

@section('footer')
<footer>
        <img alt="Marchio reggistrato" src="../jpg/MP.png">
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
@stop