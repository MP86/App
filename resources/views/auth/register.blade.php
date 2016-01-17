@extends('app')

@section('title')
Registrazione
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Registazione</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Ci sono stati alcuni problemi con i vostri dati.<br /><br />
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Nome</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Conferma Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Telefono</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
							</div>
						</div>
						
						<hr />
						
						<div class="form-group">
							
							<div class="col-md-10 col-md-offset-4">
							
								<button type="submit" class="btn btn-primary" name="ruolo" value="user">
									Registra Utente 
								</button>
							
								<button type="submit" class="btn btn-info" name="ruolo" value="company">
									Registra Azienda
								</button>
								
								<button type="submit" class="btn btn-default" href="/auth/login">
									Se sei gia registrato...
									Fai login
								</button>
						
							</div>
						
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection