@extends('layout.template')
@section('title', 'Select Query')


@section('content')
	<div class='container'>
		<div class='row'>
			<div class="col-lg-1 col-md-1 col-sm-1">
				@include('layout.sidebar')
			</div>
			<div class="col-lg-11 col-md-11 col-sm-11">
				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10">
						@foreach($query as $q)
						{{Form::open(['action' => 'UserController@showQuery'])}}
							{{Form::hidden('invisible', $q->queryName)}}
							{{Form::Submit($q->queryName, array('class' => 'btn btn-link'))}}
						{{Form::close()}}
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection