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
							<th>Last name</th>
							<th>Designation</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Operation</th>


							
							
						</tr>
						<!-- student list display-->
						@if(0 < count($objManageemp))
						
							@foreach ($objManageemp as $manageemp)
							
							<tr>

							<td>{{ $manageemp->first_name}}</td>
								
								<td>{{ $manageemp->last_name }}</td>
								<td>{{ $manageemp->job_title}}</td>
								
								<td>{{ $manageemp->home_phone}}</td>
								<td>{{ $manageemp->email}}</td>
								
								<td>

									<a href="#" role="button" id="assigntoemp" class="btn btn-sm btn-success fa fa-user" data-id="{{$manageemp->id}}" title="Assign Asset"></a>
								</td>
								
							 </tr>
							 
							@endforeach
							
							@else
								
								<tr><td colspan="8" class="alert-danger"><center>No Employee found.</center></td></tr>
							
							@endif
							
					</table>

				</div>
				<!-- Assign Sales Executive  -->
<div class="modal fade bs-modal-lg" id="assignAssetModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Assign asset to employee</h4>
                        </div>
                        <div class="modal-body"> 
                            
                            <div class="portlet ">
                               <!-- <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-user"></i>Student Details
                                    </div>
                                    
                                </div>-->
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <div id="fetchEditForm1">
                                        <!--Fetch form by other editblade file-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                            <button type="button" class="btn green" id="btnAsset">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>  <!-- close model  -->

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