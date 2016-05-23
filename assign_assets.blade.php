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
				<h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Assign assests</h3>
				

			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">

					<table class="table table-bordered table-hover table-striped">
						<tr class="text-left">
							<th class="text-left">Asset id</th>
							<th class="text-left">Employee name</th>
							<th class="text-left">Designation</th>
							<th class="text-left">Asset name</th>
							<th class="text-left">Description</th>
							<th class="text-left">Quantity</th>
							<th class="text-left">Status</th>
							<th class="text-left">Approve/Disapprove</th>

							
							
						</tr>
						<!-- student list display-->
						@if(0 < count($users))
						
							@foreach ($users as $assets)
							
							<tr>
								<td class="text-right">{{ $assets->id }}</td>
								<td class="text-right">{{ $assets->first_name }} {{ $assets->last_name }} </td>
								<td class="text-right">{{ $assets->job_title }}</td>
								<td class="text-right">{{ $assets->asset_name }}</td>
								<td class="text-right">{{ $assets->description}}</td>
								<td class="text-right">{{ $assets->quantity}}</td>
								
								<td>@if($assets->status==1)
								Approved
								@elseif($assets->status==2)
								Disapproved
								@else
								pending
								@endif</td>

								
								<td>
							@if($assets->status!=1 AND $assets->status!=2)

							
								<a href="{{URL::to('Assetpermit/'.$assets->id.'/status')}}" name="status" value="1" id="app1" data-toggle="tooltip" title="Approve"
								class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								<a href="{{URL::to('Assetnonpermit/'.$assets->id.'/status')}}"  class="btn btn-danger" name="status" value="2" id="dis1" data-toggle="tooltip" title="Disapprove"><span class="glyphicon glyphicon-remove"></span>
																	
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


</div>
</div>


@stop

</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script>
    $(document).ready(function() {
        $('app1').click(function() {
            $('#app1').hide();
             $('#dis1').hide();

        });
    });
</script>

@endsection
