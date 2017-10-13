@extends('layout.template')
@section('title', 'Mainpage')

@section('content')
		<?php
			echo $duedate->fldFName;
			// foreach($duedate as $d){
				// $today = date('Y-m-d', $d->fldStartDate);
				// $month = 1;
				// $next = strtotime($today." + ".$month." Months");
				// $next = strtotime($d->fldStartDate." + ".$month." Months");
				// echo date("Y-m-d", $next)."<br />";
				// echo $d->fldFName."-".$d->fldFName."<br />";
			// }
		?>

		<div class="container">'
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4">{{ HTML::link('/createQuery', 'Create Query')}}</div>
				<div class="col-lg-4 col-md-4 col-sm-4">{{ HTML::link('/listQuery', 'Insert Query')}}</div>
				<div class="col-lg-4 col-md-4 col-sm-4">{{ HTML::link('users/logout', 'Logout')}}</div>
			</div>
		</div>
				
@endsection