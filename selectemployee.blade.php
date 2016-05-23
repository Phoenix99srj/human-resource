@extends('app')

@section('content')

<div id="page-wrapper">
<div class="row">
      
       <div class="col-md-10">
                          <fieldset>
                          </br></br>
                
                <!-- Form Name -->
                <h3 align="center"><font class="font1">enter the first and last name of employee to view attendance details</font></h3>
                </br>
                <div align="center">
<form class="form-horizontal" role="form" method="GET" action="{{{URL::to('Attendance')}}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group {{{ $errors->has('q') ? 'has-error' : '' }}}">

<input type="text" name="q" id="q">
{!!$errors->first('q', '<span class="help-block">:message </span>')!!}
</br>
</br>
<input type="submit" name="submit" value="GO" class="btn btn-success" id="submit">
</form>
</div>  
<style> 
#q {
    background: #ffffff;
    width: 200px;
    padding: 6px 15px 6px 35px;
    border-radius: 20px;
    box-shadow: 0 1px 0 #ccc inset;
    transition: 500ms all ease;
    outline: 0;
}

#q:hover {
    width: 270px;
}  
</style>


    
@endsection
