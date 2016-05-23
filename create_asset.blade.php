@extends('app')
@section('content')
<div id="page-wrapper">
        <div class="row">
            <!--<div class="col-lg-12">
            <h1 class="page-header">Asset Master</h1>
			</div>  -->
                <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
		<br><br>
			
	<div class="row">

		<div class="col-lg-12">

			<div class="panel panel-primary">

				<div class="panel-heading">

					<h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Add Assets</h3>

					<form class="form-horizontal" enctype="multipart/form-data"  

					action="{{ URL::to('manage_asset') }}" autocomplete="off">

						<div class="pull-right btnback">

							<button class="btn btn-primary btn-sm close_popup"  type="submit" style="margin-top:-40px;">

								<span class="glyphicon glyphicon-backward"></span> Back

							</button>

						</div>

					</form>

				</div>

				<div class="panel-body" style="width:95%;">	

					<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ URL::to('create_asset') }}" autocomplete="off" style="padding-left:15%">

						<!-- CSRF Token -->

						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

						<!--retrive shop id-->

						<div class="row">

							<div class="col-md-7 space">

								<div class="form-group {{{ $errors->has('asset_name') ? 'has-error' : '' }}}">

									<label class="control-label" for="asset_name">Asset Name<span class="manetory">*</span></label>

									<input class="form-control" type="text" name="asset_name" id="asset_name" value="{{{ Input::old('asset_name') }}}" />

									{!!$errors->first('asset_name', '<span class="help-block">:message </span>')!!}

								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-7 space">

								<div class="form-group {{{ $errors->has('description') ? 'has-error' : '' }}}">

									<label class="control-label" for="description">Description<span class="manetory">*</span></label>

									<textarea class="form-control" type="textarea
									" name="description" id="description">{{{ Input::old('description') }}}</textarea>

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
										<input type="radio" name="status" value="available" />Available
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="status" value="unavailable" /> Unavailable
									</label>
									{!!$errors->first('status', '<span class="help-block">:message </span>')!!}
								</div>
							</div>
                    </div>
				</div><br>
					<div class="form-group">

						<div class="col-md-7">

							<button type="submit" class="btn btn-sm btn-success">

							<span class="glyphicon glyphicon-ok-circle"></span> Submit

							</button>

							<a href="{{ URL::to('asset') }}" class="btn btn-sm btn-danger close_popup">

								<span class="glyphicon glyphicon-ban-circle"></span> Cancel

							</a>

						</div>

					</div>

				</form>

			</div>

		</div>

	</div>

	</div>
			
		
            <!-- /.container-fluid -->

        </div>	
	
		
        <!-- /#page-wrapper -->
@endsection
