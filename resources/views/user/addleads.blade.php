@extends('layout.template')
@section('title', 'Create Query')


@section('content')
	@include('layout.firstheader')
	<div class='container'>
		<div class='row'>
			<div class="col-lg-1 col-md-1 col-sm-1">
				@include('layout.sidebar')
			</div>
			<div class="col-lg-11 col-md-11 col-sm-11">
			{{Form::open(['action' => 'UserController@addleads'])}}
			<div class='row'><div class='col-lg-6 col-md-6 col-sm-6'><h2>Add Apartment Lead</h2></div></div>
			<div class='row'>
				<div class='col-lg-2 col-md-2 col-sm-2'>Apartment Name :</div>
				<div class='col-lg-10 col-md-10 col-sm-10'><input type="text" class="form-control" placeholder="Apartment Name" name="aptname" /></div>
			</div>

			<div class='row'>
				<div class='col-lg-2 col-md-2 col-sm-2'>Contact Number :</div>
				<div class='col-lg-10 col-md-10 col-sm-10'><input type="text" class="form-control" placeholder="Contact number" name="contact" /></div>
			</div>

			<div class='row'>
				<div class='col-lg-2 col-md-2 col-sm-2'>Addresss :</div>
				<div class='col-lg-7 col-md-7 col-sm-7'><input type="text" class="form-control" placeholder="Apartment Unit" name='unit' /></div>
				<div class='col-lg-3 col-md-3 col-sm-3'><input type='text' class="form-control" placeholder='City name' name='city' /></div>
			</div>

			<div class='row'>
				<div class='col-lg-2 col-md-2 col-sm-2'>&nbsp;</div>
				<div class='col-lg-3 col-md-3 col-sm-3'><input type='text' class="form-control" placeholder='State name' name='state' /></div>
				<div class='col-lg-2 col-md-2 col-sm-2'><input type='text' class="form-control" placeholder='Zip code' name='zip' /></div>
			</div>

			<div class='row'>
				<div class='col-lg-2 col-md-2 col-sm-2'>Country :</div>
				<div class='col-lg-10 col-md-10 col-sm-10'><input type='text' class="form-control" placeholder='Country name' name='country' /></div>
			</div>
			<div class='row'>
				<div class='col-lg-4 col-md-4 col-sm-4'><input type='submit' class="form-control" value='Add lead' /></div>
			</div>
			{{Form::close()}}
			</div>
		</div>
	</div>

@endsection