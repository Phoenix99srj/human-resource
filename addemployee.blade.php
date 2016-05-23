@extends('app')

@section('content')
<style>
.margin-bottom 
{
margin-bottom:15px;
}
hr {
  -moz-border-bottom-colors: none;
  -moz-border-image: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-color: #EEEEEE -moz-use-text-color #FFFFFF;
  border-style: solid none;
  border-width: px 0;
  margin: 18px 0;
}
</style>


    <script type="text/javascript" src="js/bootstrap-filestyle.min.js">
    $(":file").filestyle();
     </script>
<script type="text/javascript">
function ChooseContact(data)
{
      document.getElementById("description").value = data.value;
}

</script>
<div id="page-wrapper">
<div class="col-lg-12">
<!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Add employee</title>
 
  
 <div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Add employee</h3>
				</div>
			

				

<nav class="navbar navbar">
  <div class="container-fluid">
    <div class="navbar-header-primary">
      
    </div>
    
    <ul class="nav nav-tabs tabs-left">
    &nbsp;&nbsp;
					<li class="active"><a href="#step1" data-toggle="tab">Personal</a></li>
					<li><a href="#step2" data-toggle="tab">Official</a></li>
					<li><a href="#step3" data-toggle="tab">Qualification</a></li>
					<li><a href="#step4" data-toggle="tab">Bank Details</a></li>
					
					</ul>
  </div>
  <div class="col-lg-12">
  <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ URL::to('create_employee') }}" autocomplete="off" style="padding-left:15%">
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				<div class="tab-content">
					<div class="tab-pane active" id="step1">
						
						<div>
						<h3>Personal Details</h3>

						<!--/br>
							@if (count($errors) > 0)
						<div class="alert alert-info">
							<h4>Please fill all the fields correctly</h4>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div-->
					<!--@endif-->
					<div class="row">
						<div class="col-sm-3">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-md" placeholder="First Name" tabindex="1" value="{{ old('first_name') }}">
					</div>
					</div>
				
				
				<div class="col-sm-3">
					<div class="form-group">
                        <input type="text" name="middle_name" id="middle_name" class="form-control input-md" placeholder="Middle name" tabindex="1" value="{{ old('middle_name') }}">
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-md" placeholder="Last Name" tabindex="2" value="{{ old('last_name') }}">
					</div>
				</div>
				</div>
			</div>
			
			<div class="col-md-9">
			<div class="form-group">
			<div class="row">
 	<select name="nationality" class="form-control input-md" id="sel1">

 		<option selected="true" style="display:none;" value="{{ old('nationality') }}">Select nationality</option>
        <option value="Indian" @if (Input::old('nationality') == 'Indian') selected="selected" @endif>Indian</option>
        <option value="Other" @if (Input::old('nationality') == 'Other') selected="selected" @endif>Other</option>
       
    

      </select>		
      	</div>
      	</div>
			<div class="form-group">
			<div class="row">
				<div id="datepickerB" class="input-group date" data-date-format="yyyy-mm-dd">
                                                
                                                  <input class="form-control input-md" name="birth_date" type="text"  placeholder="Enter birthdate" value="{{ old('birth_date') }}" />
                                               <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                           
                                                </div>
                                           </div>
			</div>
			
				<div class="row">
					<div class="form-group">
				<input type="text" name="address1" id="address1" class="form-control input-md" placeholder="Address line 1" tabindex="4" value="{{ old('address1') }}">
			</div>

</div>
			<div class="form-group">
			<div class="row">
				<input type="text" name="address2" id="address2" class="form-control input-md" placeholder="Address line 2" tabindex="4" value="{{ old('address2') }}">
			</div>
			</div>
			<div class="row">
			<div class="form-group">
				<input type="text" name="city" id="city" class="form-control input-md" placeholder="city" tabindex="4" value="{{ old('city') }}">
			</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
												<select name="blood_group" class="form-control input-md" id="sel1">
 						<option selected="true" style="display:none;" value="{{ old('blood_group') }}">Select Blood group</option>
       	<option value="O+" @if (Input::old('blood_group') == 'O+') selected="selected" @endif>O+</option>
       	<option value="O-" @if (Input::old('blood_group') == 'O-') selected="selected" @endif>O-</option>
     	<option value="A+" @if (Input::old('blood_group') == 'A+') selected="selected" @endif>A+</option>   	<option value="A-" @if (Input::old('blood_group') == 'A-') selected="selected" @endif>A-</option>
       	<option value="B+" @if (Input::old('blood_group') == 'B+') selected="selected" @endif>B+</option>
       	<option value="B-" @if (Input::old('blood_group') == 'B-') selected="selected" @endif>B-</option>
       	<option value="AB+" @if (Input::old('blood_group') == 'AB+') selected="selected" @endif>AB+</option>
       	<option value="AB-" @if (Input::old('blood_group') == 'AB-') selected="selected" @endif>AB-</option>
     						 </select>

					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<select class="form-control input-md" id="sel1" name="marital_status">
 						<option selected="true" style="display:none;" value="{{ old('marital_status') }}">Select marital status</option>
       					 <option value="Married" @if (Input::old('marital_status') == 'Married') selected="selected" @endif>Married</option>
       					 <option value="Unmarried" @if (Input::old('marital_status') == 'Unmarried') selected="selected" @endif>Unmarried</option>
     						 </select>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<select name="gender" class="form-control input-md" id="sel1">
 						<option selected="true" style="display:none;" value="{{ old('gender') }}">Select gender</option>
       					<option value="Male" @if (Input::old('gender') == 'Male') selected="selected" @endif>Male</option>
       					 <option value="Female" @if (Input::old('gender') == 'Female') selected="selected" @endif>Female</option>
     						 </select>	
					</div>
				</div>
				
				
				
								<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<select name="physically_handicap" class="form-control input-md" id="sel1">
 						<option selected="true" style="display:none;" value="{{ old('physically_handicap') }}">Physically handicapped?</option>
       					 <option value="Yes" @if (Input::old('physically_handicap') == 'Yes') selected="selected" @endif>Yes</option>
       					 <option value="No" @if (Input::old('physically_handicap') == 'No') selected="selected" @endif>No</option>
     						 </select>	
					</div>
				</div>
				
				</div>
				</div>
			</div>
						
					<div class="tab-pane" id="step2">
						<div class="col-xs-12">
				<div class="tab-content">
					<div class="tab-pane active" id="step1">
						
						
						<h3>Official Details </h3>

						</br>
						
				
			<div class="col-md-6">
			<div class="form-group">
				<input type="text" name="job_title" id="job_title" class="form-control input-md" placeholder="Job title" tabindex="3" value="{{ old('job_title') }}">
			</div>
			<div class="form-group">
				<div class="form-group">
				<div id="datep" class="input-group date" data-date-format="yyyy-mm-dd">
                                                
                                                  <input class="form-control input-md" name="date_of_joining" type="text"  placeholder="Date of joining" value="{{ old('date_of_joining') }}" />
                                               <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                           
                                                </div>
			</div>
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-md" placeholder="Email" tabindex="4" value="{{ old('email') }}">
			</div>
			<div class="form-group">
				<input type="varchar" name="home_phone" id="mobile" class="form-control input-md" placeholder="Mobile" tabindex="4" value="{{ old('home_phone') }}">
		</div>		
				</div>
				</div>
				</div>
			</div>
			</div>	

					<div class="tab-pane" id="step3">
					<div class="row">
						<h3>Qualification details</h3><h6>add more section</h6>
						<span class="glyphicon glyphicon-plus" id="addnew1" title="AddNew"></span>

						<span class="glyphicon glyphicon-remove" id="delete" title="Delete"></span></br>
						</div>
						</br>
						<div class="col-md-12">
						

         
         
         	<div id="qrow">
         <div id="education">
         <div class="education">
         <div class="col-sm-2">
					
					<div class="row-fluid" >
					<div class="form-group {{{ $errors->has('edu_name[]') ? 'has-error' : '' }}}">
<select name="edu_name[]" class="form-control input-md" onchange="ChooseContact(this)">
							<option selected="true" style="display:none;">Select Degree</option>
								@foreach ($objMasterEducation as $dropdown)
									<option value="{{$dropdown->id}}" class="form-control">{{$dropdown->edu_name}}</option>
								@endforeach
								</select>			</div>
												</div>
				</div>
				<div class="row-fluid">
         	<div class="col-sm-4">
					
					<div class="form-group {{{ $errors->has('institute[]') ? 'has-error' : '' }}}">
                        <input type="text" name="institute[]" id="institute" class="form-control input-md" placeholder="institute" tabindex="1" value="{{ old('institute') }}">
					</div>
				</div>
</div>			
<div class="row-fluid">	
<div class="col-sm-2">
					
					<div class="form-group {{{ $errors->has('from_year[]') ? 'has-error' : '' }}}">
                        <input type="text" name="from_year[]" id="from_year" class="form-control input-md" placeholder="from year" tabindex="1" value="{{ old('from_year') }}">
					</div>
				</div>
				</div>
				<div class="row-fluid">
				<div class="col-sm-2">
					<div class="form-group {{{ $errors->has('to_year[]') ? 'has-error' : '' }}}">
                        <input type="text" name="to_year[]" id="to_year" class="form-control input-md" placeholder="to year" tabindex="1" value="{{ old('to_year') }}">
					</div>
					</div>
				</div>
				<div class="row-fluid">
				<div class="col-sm-2">
					<div class="form-group {{{ $errors->has('percentage[]') ? 'has-error' : '' }}}">
                        <input type="text" name="percentage[]" id="percentage" class="form-control input-md" placeholder="percentage" tabindex="1" value="{{ old('percentage') }}">
					</div>
				</div>
          </div>
          </div>
        
			</div>
			</div>
				</div>
			</div>

<div class="tab-pane" id="step4">
						<div class="col-xs-12">
				<div class="tab-content">
					
						
						
						<h3>Bank Details</h3>
						</br>
					
				
				
				
			
			<div class="form-group">
				<input type="text" name="bank_name" id="bankname" class="form-control input-md" placeholder="Bank name" tabindex="3" value="{{ old('bank_name') }}">
			</div>
			<div class="form-group">
				<input type="date" name="branch_name" id="branchname" class="form-control input-md" placeholder="Branch Name" tabindex="4" value="{{ old('branch_name') }}">
			</div>
			<div class="form-group">
				<input type="text" name="account_no" id="acno" class="form-control input-md" placeholder="Account number" tabindex="4" value="{{ old('account_no') }}">
			</div>
			<div class="form-group">
				<input type="text" name="ifsc_code" id="ifsc" class="form-control input-md" placeholder="IFSC code" tabindex="4" value="{{ old('ifsc_code') }}">
			</div>
			<input type="hidden" name="id" id="id">
			</br>
			</br>
			</br>
			</br>
		
			</div>
		
            <!-- /.container-fluid -->

     <!-- /#page-wrapper -->

                                       
                                        
                                   
                                   
                            </div> 
					

			
			</br>
			</br>
			</br>
			</br>
		

				

			
			<div class="col-md-7">

							<button type="submit" class="btn btn-sm btn-success">

							<span class="glyphicon glyphicon-ok-circle"></span> Submit

							</button>
							<button type="reset" class="btn btn-sm btn-warning">

							Reset

							</button>

							<a href="{{ URL::to('home') }}" class="btn btn-sm btn-danger close_popup">

								<span class="glyphicon glyphicon-ban-circle"></span> Cancel

							</a>
						

						</div>

			
			

				
						
			
			

</div>
</div>
</form>
</div>
</div>
				</div>

				</div>

			
			
					
			

				
						
			
			
</nav>
  



@stop