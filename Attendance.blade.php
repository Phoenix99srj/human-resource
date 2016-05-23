@extends('app')

@section('content')
<div id="page-wrapper">

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-9 col-md-offset-1">
      <div class="panel panel-default">
        

        
        
      </div>
    </div>
  
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
        <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>User timesheet</h3>
        
<form class="form-horizontal" name="attendance"  id="attendance" method="get" action="{{ URL::to('emp_attendance_mgt/add') }}">
      
      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
      <div class="row" style="padding-left:18px;">
            <!--  <div class="col-sm-3 space">
                <label class="control-label" >Select Month</label>
                  <div class="input-group input-append date datePicker" id="datepicker" >
                    <input type="text" class="form-control" name="monthdate" id="monthdate" value="{{{ Input::old('monthdate') }}}">

                      <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>

                    </div>
                </div>  -->
              <div class="col-sm-2 space" >

                <div class="form-group {{{ $errors->has('monthdate') ? 'has-error' : '' }}}">

                    <label class="control-label">Select Months</label>

                    <div class="input-group input-append date datePicker" id="datepicker1">

                      <input type="text" class="form-control" name="monthdate" id="monthdate" value="{{{ Input::old('monthdate') }}}" data-id="date">

                      <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>                
                   {!!$errors->first('monthdate', '<span class="help-block">:message </span>')!!} 
                </div>
              </div>
                  
          <div class="form-group" style="margin-top:29px;">
            <div class="col-md-7">
              <button type="submit" class="btn btn-sm btn-primary" id="hidetable" >
              <span class="glyphicon glyphicon-ok-circle" ></span> Submit
              </button>
            </div>
          </div>
        </div>
        </form>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped">
            <tr>
              <th>Attendance id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Attendance date</th>
              <th>Time-in</th>
              <th>Break-in time</th>
              <th>Break-out time</th>
              <th>Time-out</th>
              <th>Working hours</th>
              <th>Status</th>

              
              
            </tr>
            <!-- student list display-->
            @if(0 < count($objAttendance))
            
              @foreach ($objAttendance as $atten)
              
              <tr>

                <td>{{ $atten->id}}</td>
                <td>{{ $atten->first_name}}</td>
                <td>{{ $atten->last_name}}</td>
                <td>{{ $atten->attend_date}}</td>
                <td>{{ $atten->in_time}}</td>
                <td>{{ $atten->break_in_time}}</td>
                <td>{{ $atten->break_out_time}}</td>
                <td>{{ $atten->out_time}}</td>
                <td>{{ $atten->total_hours}}</td>
                
                @if($atten->status == 1)
                  
                    <td>Half Day</td>
                  @endif
                
                @if($atten->status == 2)
                  
                    <td>Full Day</td>
                  @endif            
                
                
      
                <!--<a data-toggle="modal" data-toggle="modal" onClick="deleteRecord({{$atten->id}},'Attendance')" data-target="#myModal"  class="btn btn-sm  btn-danger iframe" value="New" data-placement="left" title="Delete">-->

                  
                
                
               </tr>
               
              @endforeach
              
              @else
                
                <tr><td colspan="11" class="alert-danger"><center>.No attendance found</center></td></tr>
              
              @endif
              
          </table>

        </div>
         

      </div>

    </div>

  </div>

  

</div>

  </div>

</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@stop