<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
@if(Auth::user()->user_type_id==1)
<title>HRMS: Admin</title>
@endif
@if(Auth::user()->user_type_id==2)
<title>HRMS: Employee</title>
@endif

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="{{asset('public/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet"><link href="{{asset('public/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('public/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{asset('public/dist/css/timeline.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('public/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('public/bower_components/morrisjs/morris.css')}}" rel="stylesheet">

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link href="{{asset('public/dist/css/lightbox.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />


    <!-- Custom Fonts -->
    <link href="{{asset('public/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>

</script>
<script src="{{ asset('public/dist/js/lightbox-plus-jquery.min.js')}}"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="bootstrap.min.css">
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $.ajax({
type:"get",
url:'{{URL::to('/')}}/search/autocomplete',
 success: function(response){
//alert (JSON.stringify(response));
//alert (JSON.stringify(response));
var arrAutocompleteText=JSON.parse(response);
//alert(arrAutocompleteText);
//var str =arrAutocompleteText.toString();
var str1=""+arrAutocompleteText["name"];
//alert(str);
//alert (str1);

var arrAutoText=str1.split(",");

//var arrAutoText1=str1.split(",");
//var arrAutoText2=arrAutoText + arrAutoText1;
//alert(arrAutoText + str1);
var availableTags=arrAutoText;
    $( "#q").autocomplete({
      source: availableTags 

});

}
});
    
  });
  </script>

</head>
<body>
<div id="wrapper">

<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

@if(Auth::user()->user_type_id==1)
                <a class="navbar-brand" href="{{{ URL::to('home') }}}">Admin: {{Auth::user()->first_name}} {{Auth::user()->last_name}}</a>
@endif

@if(Auth::user()->user_type_id==2)
<a class="navbar-brand" href="{{{ URL::to('home') }}}">Employee: {{Auth::user()->first_name}} {{Auth::user()->last_name}}</a>
@endif
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        
                    </a>
                    <ul class="dropdown">
                        
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('login') }}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="{{{ URL::to('home') }}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>   

<!-- Admin  -->
@if(Auth::user()->user_type_id==1) 
<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Manage Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
<li>
                                    <a href="{{{ URL::to('leave') }}}">Leave Master</a>
                                </li>  

                                <li>
                                    <a href="{{{ URL::to('holiday') }}}">Holiday Master</a>
                                </li>

                                <li>
                                    <a href="{{{ URL::to('document') }}}">Document Master</a>
                                </li>

<li>
                                    <a href="{{{ URL::to('education') }}}">Education Master</a>
                                </li>

<li>
                                    <a href="{{{ URL::to('tax') }}}">Tax And Deduction Master</a>
                                </li>

<li>
                                    <a href="{{{ URL::to('insentive') }}}">Earning And Reimbursement Master</a>
                                </li>

<!--    <li>
                                    <a href="{{{ URL::to('thoughts') }}}">Thoughts and News Master</a>
                                </li>  -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

<li>
                            <a><i class="glyphicon glyphicon-briefcase"></i> Employee Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{{URL::to('addemployee')}}}">Add employee</a>
                                </li>
                                <li>
                                    <a href="{{{URL::to('manageemployee')}}}">Manage employees</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                        <li>
                        
                             <a href="{{{URL::to('leavemaster')}}}"><span class="glyphicon glyphicon-log-out"></span> Manage Employee Leaves</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                        
                             <a href="{{{URL::to('selectemployee')}}}"> <span class="glyphicon glyphicon-user"></span> Manage Employee Attendance</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="glyphicon glyphicon-briefcase"></i> Asset Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <li>
                                    <a href="{{{URL::to('assign_to_emp')}}}">Assign assets</a>
                                </li>

                                <li>
                                    <a href="{{{URL::to('assign_assets')}}}">Asset requests</a>
                                </li>
                                <li>
                                    <a href="{{{URL::to('manage_assets')}}}">Manage Employee Assets</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                      
@endif

<!--  Employee  -->
@if(Auth::user()->user_type_id==2)
<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Employee Manage Leave <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
<a href="{{{ URL::to('emp_leave_mgt/create') }}}">Apply For Leave</a>
</li>
<li>
<a href="{{{ URL::to('emp_leave_mgt') }}}"> View Leaves History</a>
</li>
</ul>   
                        </li>

<li>
                            <a href="#"><i class="glyphicon glyphicon-time"></i>Employee Manage Timesheet <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
<a href="{{{ URL::to('emp_attendance_mgt/create') }}}">Today's Timesheet </a>
</li>
<li>
<a href="{{{ URL::to('emp_attendance_mgt') }}}">Timesheet History</a>
</li>

</ul>   
                        </li>

<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Employee Manage Asset<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
<a href="{{{ URL::to('emp_asset_mgt/create') }}}">Apply For Asset</a>
</li>
<li>
<a href="{{{ URL::to('emp_asset_mgt') }}}">View My Assets</a>
</li>
</ul>   
                        </li>

<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Employee Manage Document<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
<a href="{{{ URL::to('emp_document_mgt/create') }}}">Upload Documents</a>
</li>
<li>
<a href="{{{ URL::to('emp_document_mgt') }}}">View Documents </a>
</li>
</ul>   
                        </li>

<li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Employee Dashboard<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
<a href="#">Birthday Wishes</a>
</li>
<li>
<a href="#">Thoughts</a>
</li>
<li>
<a href="#">News</a>
</li>
<li>
<a href="#">Holiday</a>
</li>
</ul>   
                        </li>
@endif

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

@yield('content')


</div>
<!-- Scripts -->
   <script src="{{ asset('public/dist/js/sb-admin-2.js')}}"></script>
     <script src="{{ asset('public/js/delete.js')}}"></script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
      <script>
    $('#first_name').autocomplete({
        type: "get",
        resource: "create/autocomplete",
        dataType: "json",
        minLength: 1,
        select:function(e,ui){
      alert("hi");

    $('#response').val(ui.item.value);
    

}
    });
</script> 
<script>
$(document).ready(function () {

    $("#addnew1").click(function(){   
    $(".education:last").clone(true).appendTo("#qrow");  
});
    });

    $(document).ready(function(){
    $("#delete").click(function () {
        if ($(".education").length != 1) {
            $(".education:last").remove();
        }
        //$('.clone:last').not('.clone:first').remove();
        event.preventDefault();
    });

});
</script>

	
	 <!-- jQuery -->
    <script src="{{ asset('public/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('public/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('public/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

   

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('public/dist/js/sb-admin-2.js')}}"></script>
	<script src="{{ asset('public/js/delete.js')}}"></script>
	<script src="{{ asset('public/js/app1.js')}}"></script>
    <script src="{{ asset('public/js/app2.js')}}"></script>
    
<div id="popOverLogin" class="modal modal-dialog-center">
<div class="modal-dialog">
<div class="modal-content">
<!-- dialog body -->
<div class="modal-body alert-success">
<center><h4>{{ Session::get('flash_message') }}</h4></center>
</div>
</div>
</div>
</div>
	@if (Session::has('flash_message'))
<script type="text/javascript">
$(document).ready(function() {
$('#popOverLogin').show();
 setTimeout(function() {
$('#popOverLogin').fadeOut('fast');
}, 4500); // <-- time in milliseconds
}); 
</script>
@endif
	
	 
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<script>

$("#datepicker1".datepicker( {
    format: "mm",
    viewMode: "months", 
    minViewMode: "months"
});
</script>
<script>
$(document).ready(function() {
    $('#datePickerB')
        .datepicker({
           format: "yyyy/mm/dd ",
            startDate: '2010/01/01',
            endDate: '2050/12/30'


        });
   
        
    });	
 </script>
 <script>
$(document).ready(function() {
    $('#datepickerL')
        .datepicker({
           format: "yyyy/mm/dd ",
            startDate: '2010/01/01',
            endDate: '2050/12/30'


        });
   
        
    }); 
 </script>
 <script>
$(document).ready(function() {
    $('#datepickerL1')
        .datepicker({
           format: "yyyy/mm/dd ",
            startDate: '2010/01/01',
            endDate: '2050/12/30'


        });
   
        
    }); 
 </script>
 <script>
$(document).ready(function() {
    $('#datepickerH1')
        .datepicker({
           format: "yyyy/mm/dd ",
            startDate: '2010/01/01',
            endDate: '2050/12/30'


        });
   
        
    }); 
 </script>
 <script>
$(document).ready(function() {
    $('#datepickerH2')
        .datepicker({
           format: "yyyy/mm/dd ",
            startDate: '2010/01/01',
            endDate: '2050/12/30'


        });
   
        
    }); 
 </script>
 <script>
$(document).ready(function() {
    $('#datePickerJ')
        .datepicker({
           format: "yyyy/mm/dd ",
            startDate: '2010/01/01',
            endDate: '2050/12/30'


        });
   
        
    }); 
 </script>
 <script>
$(document).ready(function(){
    $("#hidetable").click(function(){
       //alert("hi");
       $("#timetable").remove();
        
    });
     
});
</script>

 
     
      <script>
    $('#first_name').autocomplete({
        type: "get",
        resource: "create/autocomplete",
        dataType: "json",
        minLength: 1,
        select:function(e,ui){
      alert("hi");

    $('#response').val(ui.item.value);
    

}
    });
</script> 
<script>
$("#datepicker2").datepicker( {//viewMode: "years", minViewMode: "years"});
    format: "yyyy", // Notice the Extra space at the beginning
    viewMode: "years", 
    minViewMode: "years"
}); 
</script>

<script>
$("#datepicker1").datepicker( {
    format: "yyyy-mm",
    viewMode: "months", 
    minViewMode: "months"
});
</script>
<script>
$("#datep").datepicker( {
    format: "yyyy-mm-dd",
   
});
</script>
<script>
$("#datepickerB").datepicker( {
    format: "yyyy-mm-dd",
   
});
</script>
<script>
$(document).ready(function(){
    $("#hidetable").click(function(){
       //alert("hi");
       $("#timetable").remove();
        
    });
     
});
</script>



	</body>
</html>
