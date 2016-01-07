<div class="form-group">
	{!! Form::label('nickname', 'Nickname') !!}
	{!! Form::text('nickname', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>