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
							<th>Designation</th>
							<th>Gender</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Operations</th>


							
							
						</tr>
						<!-- student list display-->
						@if(0 < count($objManageemp))
						
							@foreach ($objManageemp as $manageemp)
							
							<tr>

							<td>{{ $manageemp->first_name}}</td>
								<td>{{$manageemp->middle_name}}
								<td>{{ $manageemp->last_name }}</td>
								<td>{{ $manageemp->job_title}}</td>
								<td>{{ $manageemp->gender}}</td>
								<td>{{ $manageemp->home_phone}}</td>
								<td>{{ $manageemp->email}}</td>
								
								<td><a href="{{{ URL::to('manageemployee/'.$manageemp->id.'/edit_employee') }}}" class="btn btn-success"><span class="glyphicon glyphicon-edit" ></a>

							<a  data-toggle="modal" data-toggle="modal"  data-target="#myModal"  class="btn btn-danger" onClick="deleteRecord({{ $manageemp->id }},'delete_employee_details')" data-placement="left" title="Delete"><span class="glyphicon glyphicon-remove" ></a>

							<!--a href="{{{ URL::to('manageemployee/'.$manageemp->id.'/edit_employee') }}}" class="btn btn-info"><span class="glyphicon glyphicon-user" ></a-->

									<a href="{{{ URL::to('manageemployee/'.$manageemp->id.'/document') }}}" class="btn btn-warning"><span class="glyphicon glyphicon-duplicate" ></a>
							&nbsp;&nbsp;
                                </a></td>

									
								</td>
								
							 </tr>
							 
							@endforeach
							
							@else
								
								<tr><td colspan="8" class="alert-danger"><center>No Employee found.</center></td></tr>
							
							@endif
							
					</table>

				</div>
				 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal">

                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                    </button>

                    <h4 class="modal-title" id="frm_title">Delete</h4>

                </div>

                <div class="modal-body" id="frm_body">

                    Are you sure you want to delete this Employee Details?

                </div>

                <div class="modal-footer">

                    <form class="form-horizontal" enctype="multipart/form-data" >

                        <a href="#" class="btn btn-sm  btn-success" id="btndelete">

                                Yes

                        </a>

                        <button type="button" class="btn btn-danger " data-dismiss="modal" id="frm_cancel">No</button>

                    </form>

                </div>

            </div>

        </div>

    

			</div>

		</div>

	</div>

	

</div>

@stop