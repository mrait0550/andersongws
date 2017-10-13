<div>
	<h2>Login</h2>
	

	{!! Form::open(array('url' => 'users/login')) !!}

	<br />
	{!! Form ::label('name', 'Username')!!}
	{!! Form::text('fldUsername', null, array('placeholder' => 'justin')) !!}
	<br />

	{!! Form::label('password', 'Password') !!}
	{!! Form::password('password') !!}
	<br />
	{!! Form::submit('Sign in') !!}

	{!! Form::close() !!}
	<br />
</div>