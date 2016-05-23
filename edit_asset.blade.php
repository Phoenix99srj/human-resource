@extends('app')
@section('content')
<div id="page-wrapper">
          <!--  <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Asset Management</h1>
                </div>
                <!-- /.col-lg-12 
            </div>  -->
            <!-- /.row -->
			<br><br>
			<div class="row">

	<div class="col-lg-12">
	
		<div class="panel panel-default">
		
			<div class="panel-heading">

				<h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Edit Assets</h3>
				
				<form class="form-horizontal" enctype="multipart/form-data" 	
				action="{{ URL::to('edit_asset') }}" autocomplete="off" >
				
					<div class="pull-right btnback">
					
						<button class="btn btn-primary btn-sm close_popup" type="submit" style="margin-top:-40px;">
						
							<span class="glyphicon glyphicon-backward"></span> Back
							
						</button>
						
					</div>
					
				</form>	
				
			</div>
			
			<div class="panel-body" style="width:95%;">	
			
				<form class="form-horizontal" enctype="multipart/form-data" method="post" 
				action="{{ URL::to('asset/'.$objAsset->id.'/edit_asset') }}" style="padding-left:15%"	autocomplete="off">
				
					<!-- CSRF Token -->
					<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					
					<input type="hidden" name="id" id="id" value="{{{ $objAsset->id }}}" />
					
								
					<!-- ./ csrf token -->
					
					<div class="row">
					
						<div class="col-md-7 space">
						
							<div class="form-group {{{ $errors->has('asset_name') ? 'has-error' : '' }}}">
							
								<label class="control-label" for="asset_name">Asset Name<span class="manetory">*</span></label>
								
								<input class="form-control" type="text" name="asset_name" id="name" value="{{$objAsset->asset_name}}" value="{{{ Input::old('asset_name') }}}"/>
								
								{!!$errors->first('asset_name', '<span class="help-block">:message </span>')!!}
								
							</div>
						
						</div>
						
					</div>
					
					<div class="row">

							<div class="col-md-7 space">

								<div class="form-group {{{ $errors->has('description') ? 'has-error' : '' }}}">

									<label class="control-label" for="description">Description<span class="manetory">*</span></label>

									<textarea class="form-control" type="textarea
									" name="description" id="description" >{{$objAsset->description}}</textarea>

									{!!$errors->first('description', '<span class="help-block">:message </span>')!!}

								</div>

							</div>	

						</div>
					
					
					<div class="row" style="padding-right:80%">
						<div class="form-group">
                        <label class="col-sm-4 control-label">Status</label>
                        <div class="col-sm-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" value="available" checked>Available
                                </label>
								
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" value="unavailable"checked> Unavailable
                                </label>
								<span class="error">{{ $errors->first('status') }}</span>
								
                            </div>
                        </div>
                    </div>
					</div>
					
					
					<div class="form-group">
					
						<div class="col-md-12">
						
							<button type="submit" class="btn btn-sm btn-success">
							
								<span class="glyphicon glyphicon-ok-circle"></span> Submit
								
							</button>
							
							<a href="{{ URL::to('manage_asset') }}" class="btn btn-sm btn-warning close_popup">
							
								<span class="glyphicon glyphicon-ban-circle"></span> Cancel
								
							</a>
							
						</div>
						
					</div>
					
				</form>
				
			</div>
			
		</div>
		
	</div>
	
</div>
			
			
			
			
		</div>
        <!-- /#page-wrapper -->
@endsection
