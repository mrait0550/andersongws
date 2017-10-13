<div>
	<h2>Login</h2>
	

	<?php echo Form::open(array('url' => 'users/login')); ?>


	<br />
	<?php echo Form ::label('name', 'Username'); ?>

	<?php echo Form::text('fldUsername', null, array('placeholder' => 'justin')); ?>

	<br />

	<?php echo Form::label('password', 'Password'); ?>

	<?php echo Form::password('password'); ?>

	<br />
	<?php echo Form::submit('Sign in'); ?>


	<?php echo Form::close(); ?>

	<br />
</div>