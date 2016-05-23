@extends('app')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Apply for leave</h1>
                </div>
                <div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>



<!-- Text input-->
<div class="form-group"> 
  <label class="col-md-4 control-label">Type of leave</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        
    <select name="state" class="form-control selectpicker" >
      <option value=" " >please select type of leave</option>
      <option>Annual leave</option>
      <option>Sick leave</option>
      <option >Medical leave</option>
      <option >Emergency leave</option>
      <option >Other leave</option>
      
    </select>
  </div>
</div>
</div>
       <div class="form-group">
  <label class="col-md-4 control-label">Duration</label>  
    
    <div class="col-md-4 selectContainer">
    <div class="input-group">

<div class="form-group {{{ $errors->has('from_date') ? 'has-error' : '' }}}">



<div class="input-group input-append date datePicker">

<input type="text" class="form-control" name="from_date" id="from_date"/>

<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span>

</div>{!!$errors->first('from_date', '<span class="help-block">:message </span>')!!} 

</div>



       
       



<!-- Text input-->
       

  
<div class="form-group">
  <label class="col-md-4 control-label">Note</label>
    <div class="col-md-10 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <textarea class="form-control" name="comment" placeholder="Give reason or any note"></textarea>
  </div>
  </div>
</div>

<!-- Success message -->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Submit<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
@endsection
