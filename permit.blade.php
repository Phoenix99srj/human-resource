@extends('app')

@section('content')
<div id="page-wrapper">
<style>
.tdsize{

width:15%;

}
</style>
<script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
2
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	</script>
	<form action="{{ URL::to('permit') }}" method="post" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{csrf_token()}}}">
<div class="container">
	<div class="row">
	
		<div class="col-md-11 text-center">
			<div class="panel panel-primary">
				<div class="panel-heading left">Please approve or disapprove this leave</div>
						</div>
<div class="radio radio-primary">

	  <input id="app" name="leave" value="approve" type="radio" >Approve this leave

	  	</div>

	 

	<div class="radio radio-danger">

	  <input id="dis" name="leave" value="disapprove"  type="radio">Disapprove this leave

	</div>
	<button type="submit" class="btn btn-primary" name="done">
									Done
								</button>
	</div>
	</div>
	</div>
	</form>
	@stop

</div>



@endsection
