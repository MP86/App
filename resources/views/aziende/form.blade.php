<div class="form-group">
	{!! Form::label('nome', 'Nome') !!}
	{!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tipo', 'Tipo di azienda') !!}
	{!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('indirizzo', 'Indirizzo e N°') !!}
	{!! Form::text('indirizzo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('CAP', 'CAP') !!}
	{!! Form::text('CAP', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>