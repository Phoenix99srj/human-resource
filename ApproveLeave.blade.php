
            
            <!-- BEGIN FORM-->
           <form class="form-horizontal" name="apr" id="apr" enctype="multipart/form-data" >
                 <!-- CSRF Token -->
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    
                    <input type="hidden" name="id" id="id" value="{{{ $objEmpRecord->id }}}" />
                        <div class="form-body">
                            <select name="edu_name" class="form-control input-md">
                            <option selected="true" style="display:none;">Select type of leave</option>
                                @foreach ($objLeaveMaster as $dropdown)
                                    <option value="{{$dropdown->leave_type}}" class="form-control">{{$dropdown->leave_type}}</option>
                                @endforeach
                                </select>       
                                        </div>
                                    </div>
                                    <!--/span-->
                                
                            </div>
                        
                  
