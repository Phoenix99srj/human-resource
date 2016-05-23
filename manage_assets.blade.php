@extends('app')
@section('content')
<div id="page-wrapper">
<style>
.tdsize{

		width:15%;

	}
</style>
            <div class="row">
              <!--  <div class="col-lg-12">
                    <h1 class="page-header">Asset Detail Master</h1>
                </div>
                <!-- /.col-lg-12 
            </div> -->
            <!-- /.row --><br><br>
			<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> 	Asset Master
				<a href="{{{ URL::to('create_asset') }}}" class="btn btn-sm  btn-info pull-right btnback" data-toggle="tooltip" data-placement="left" title="New" style="margin-top:-3px;">
					<span class="glyphicon glyphicon-plus"></span>

				</a></div>
				
			</div>
			
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<tr>
							<th>Id:</th>
							<th>Asset Name:</th>
							<th>Description:</th>
							<th>Status:</th>
							<th>Action</th>
							
						</tr>
						<!-- student list display-->
						@if(0 < count($objAssets))
						
							@foreach ($objAssets as $assets)
							
							<tr>

								<td>{{ $assets->id}}</td>

								<td>{{ $assets->asset_name }}</td>
								<td>{{ $assets->description }}</td>
								<td>{{ $assets->status }}</td>
								<td class="tdsize"> 

									<a href="{{{ URL::to('asset/'.$assets->id.'/edit_asset') }}}" class="btn btn-sm  btn-success iframe" data-toggle="tooltip" data-placement="left" title="Edit">

										<span class="glyphicon glyphicon-pencil"></span>

									</a>
<a data-toggle="modal" onClick="deleteRecord({{$assets->id}},'manage_asset')" data-target="#myModal"  class="btn btn-sm  btn-danger iframe" value="New" data-placement="left" title="Delete">
									
										<span class="glyphicon glyphicon-remove"></span>
										
									</a>

								</td>
								
							 </tr>
							 
							@endforeach
							
							@else
								
								<tr><td colspan="8" class="alert-danger"><center>Assets not found.</center></td></tr>
							
							@endif
							
					</table>

				</div>

			</div>

		</div>

	</div>

	<!-- Delete Confrim DiglogBox -->

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

					Are you sure you want to delete this Asset?

				</div>

				<div class="modal-footer">

					<form class="form-horizontal" enctype="multipart/form-data" >

						<a class="btn btn-sm  btn-success" id="btndelete">

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
        <!-- /#page-wrapper -->
@endsection
