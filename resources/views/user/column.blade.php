@extends('layout.template')
@section('title', 'Create Query')


@section('content')
	<div class='container'>
		<div class='row'>
			<div class="col-lg-1 col-md-1 col-sm-1">
				@include('layout.sidebar')
			</div>

				{{Form::open(['action' => 'UserController@getChecked'])}}
			<div class="col-lg-11 col-md-11 col-sm-11">
				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10">
						{{Form::hidden('tablename', $request)}}
						@foreach($column as $select)
							{{Form::checkbox('columncheck[]', $select->Field)}}{{$select->Field}}<br />
						@endforeach
					</div>
				</div>

				{{Form::submit('Button')}}

				{{Form::close()}}
			</div>
		</div>
	</div>
@endsection