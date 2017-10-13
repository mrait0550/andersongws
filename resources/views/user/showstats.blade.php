@extends('layout.template')
@section('title', 'Show Query')


@section('content')
	<div class='container'>
		<div class='row'>
			<div class="col-lg-1 col-md-1 col-sm-1">
				@include('layout.sidebar')
			</div>
			<div class="col-lg-11 col-md-11 col-sm-11">

				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10">
						<table border='1' class="table">
								<tr>
								@foreach($query as $q)
									<td align="center">
									<?php
									// $qu = str_replace(array('[', ']'), '', $q->columname);
									$que = preg_replace('/[^A-Za-z0-9\-\(\),  ]/', '', $q->columname);

									$queque = explode(" ", $q->columname);
									
									$sq = json_decode($q->columname);
									$sqim = implode(',', $sq);
									$array = array(); 
									foreach($sq as $qe){
										echo $qe."<br />";
										$array[] = $qe;
									}
									print_r($array)."<br />";
									echo DB::table($q->tablename)
												->select($array)
												->get();
									?>
									</td>
								@endforeach
								</tr>
						</table>
						
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class='row'>
				</div>
			</div>
			{{Form::close()}}
		</div>
	</div>
@endsection