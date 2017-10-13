@extends('layout.template')
@section('title', 'Show Query')


@section('content')
	<div class='container'>
		<div class='row'>
			<div class="col-lg-1 col-md-1 col-sm-1">
				@include('layout.sidebar')
			</div>
			{{Form::open(['action' => 'UserController@saveQuery'])}}
			{{Form::hidden('tablename', $tablename)}}
			<div class="col-lg-11 col-md-11 col-sm-11">
				<div class="row"><br /><br />
					<div class="col-lg-12 col-md-12 col-sm-12">
						Query Title :{!! Form::text('fldTitle', null, array('placeholder' => 'Query Title')) !!}
					</div>
					<br /><br />
				</div>

				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10">
						<table border='1' class="table">
								<tr>
								@foreach($select as $s)
									{{Form::hidden('column[]', $s)}}
									<td align="center">{{$s}}</td>
								@endforeach
								</tr>
						<tbody>
						<tr>
						@foreach($query as $q)
							<?php for($i=0;$i<sizeof($select);$i++){ 
								$mugi = sizeof($select) - 1;	
								 ?>
								<td align="center">{{$q->$select[$i]}}</td>
								<?php
								if($i%sizeof($select) == $mugi ){
								 	echo "</tr>";
								 }
								?>
							
							<?php } ?>
							
						@endforeach
						</tbody>
						</table>
						
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						{{Form::submit('Button')}}
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class='row'>
					{{$query->links()}}
				</div>
			</div>
			{{Form::close()}}
		</div>
	</div>
@endsection