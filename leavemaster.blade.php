@extends('app')

@section('content')
<div id="page-wrapper">

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-7 col-md-offset-1">
			<div class="panel panel-default">
				

				
				
			</div>
		</div>
			<style>
			.table td {
			   text-align: center;   
			}
			</style>


<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Leave Details</h3>
				

			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">

					<table class="table table-bordered table-hover table-striped">
						<tr class="text-left">
							<th class="text-left">Leave id</th>
							<th class="text-left">Employee name</th>
							<th class="text-left">Leave days</th>
							<th class="text-left">Applied from date</th>
							<th class="text-left">Applied till date</th>
							<th class="text-left">Description</th>
							<th class="text-left">Status</th>
							<th class="text-left">Approve/Disapprove</th>

							
							
						</tr>
						<!-- student list display-->
						@if(0 < count($users))
						
							@foreach ($users as $leaves)
							
							<tr>
								<td class="text-right">{{ $leaves->leave_id }}</td>
								<td class="text-right">{{ $leaves->first_name }}</td>
								<td class="text-right">{{ $leaves->applied_leave_days }}</td>
								<td class="text-right">{{ $leaves->applied_from_date}}</td>
								<td class="text-right">{{ $leaves->applied_to_date }}</td>
								<td class="text-right">{{ $leaves->Description }}</td>
								<td>@if($leaves->status==1)
								Approved
								@elseif($leaves->status==2)
								Disapproved
								@else
								pending
								@endif</td>
								<!--<td class="text-right">{{ $leaves->status }}</td>-->
								
								

								<td>
							@if($leaves->status!=1 AND $leaves->status!=2)
								  <button type="button" class="btn btn-green" id="leaveApprove" data-toggle="modal" data-target="#myModal" data-id="{{$leaves->id}}">Approve</button>

  
									</br>
								<a href="{{URL::to('nonpermit/'.$leaves->id.'/status')}}"  class="btn btn-danger" name="status" value="2" id="dis" data-toggle="tooltip" title="Disapprove"><span class="glyphicon glyphicon-remove"></span>
																	
								</a>
								@endif
								
							</td>
								
								

						</tr>	
						@endforeach	 

						
						
							
							@else
								
								<tr><td colspan="8" class="alert-danger"><center>No records found</center></td></tr>
							
							@endif
							
					</table>
</div>
</div>
				
</td>
</tr>
</table>

<!-- Modal -->				
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Select leave type</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal"  name="frmleave_emp_assign" id="frmleave_emp_assign">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
		 <input type="hidden" name="leave_id" id="leave_id" value=""   />
         <div class="form-group">
         

		<select name="leave_type_id" class="form-control input-md">
		<div class="form-group {{{ $errors->has('asset_name') ? 'has-error' : '' }}}">
							<option selected="true" style="display:none;">Select leave</option>
								@foreach ($objLeaveMaster as $dropdown)
									<option value="{{$dropdown->id}}" class="form-control">{{$dropdown->leave_type}}</option>
								@endforeach
								</select>				</div>
								{!!$errors->first('asset_name', '<span class="help-block">:message </span>')!!}
        <div class="modal-footer">
           <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                    <button type="button" id="btnleave_emp_assign" class="btn green"  data-dismiss="modal">Done</button>
                                                    
                                                </div>
            </form>
        </div>
      </div>
      
    </div>
  </div>
</div>
</div>


@stop

</div>




@endsection
