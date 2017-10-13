@extends('layout.template')
@section('title', 'Create Query')


@section('content')
	<div class='container'>
		<div class='row'>
			<div class="col-lg-1 col-md-1 col-sm-1">
				@include('layout.sidebar')
			</div>
			<div class="col-lg-11 col-md-11 col-sm-11">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						@foreach($company as $rows)
							{{$rows->fldCompanyID}} :: {{$rows->repFirst}} -- {{$rows->fldCompanyName}}<br />
						@endforeach
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						{{$company->links()}}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection