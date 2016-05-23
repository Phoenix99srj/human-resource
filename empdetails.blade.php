@extends('app')

@section('content')
<div id="page-wrapper">
<style>
.tdsize{

		width:15%;

	}
</style>
<br>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Users</h3>
				

			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<tr>
							<th>First name</th>
							<th>Middle name</th>
							<th>Last name</th>
							<th>Email</th>
							<th>Operations</th>

							
							
						</tr>
						<!-- student list display-->
						@if(0 < count($objRegister))
						
							@foreach ($objRegister as $registers)
							
							<tr>

								<td>{{ $registers->first_name}}</td>
								<td>{{$registers->middle_name}}
								<td>{{ $registers->last_name }}</td>
								<td>{{ $registers->email}}</td>
								<td><a href="{{{ URL::to('registration/'.$registers->id.'/edit_user') }}}" class="btn btn-primary"><span class="glyphicon glyphicon-edit" ></a>

								<a href="{{{ URL::to('registration/'.$registers->id.'/delete') }}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></a></td>

									
								</td>
								
							 </tr>
							 
							@endforeach
							
							@else
								
								<tr><td colspan="8" class="alert-danger"><center>No Students found.</center></td></tr>
							
							@endif
							
					</table>

				</div>
				 

			</div>

		</div>

	</div>

	

</div>

@stop