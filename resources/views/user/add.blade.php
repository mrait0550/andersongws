@extends('layout.template')
@section('title', 'Create Query')


@section('content')
	<div class='container'>
		<div class='row'>
			<div class="col-lg-1 col-md-1 col-sm-1">
				@include('layout.sidebar')
			</div>
			<div class="col-lg-11 col-md-11 col-sm-11">
				@if($errors->any())
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h3 class="alert alert-danger">{{$errors->first()}}</h3>
					</div>
				</div>
				@endif
				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10">
						@foreach($show as $select)
						{{Form::open(['action' => 'UserController@addColumn'])}}
							{{Form::hidden('invisible', $select->Tables_in_dbmcscu)}}
							{{Form::Submit($select->Tables_in_dbmcscu, array('class' => 'btn btn-link'))}}
						{{Form::close()}}
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection