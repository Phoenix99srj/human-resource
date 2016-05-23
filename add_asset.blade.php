
<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Assign asset to employee</h3>
                 </div>
                    <div class="panel-body">
					<form class="form-horizontal" name="frmassgin1" id="frmassgin1" enctype="multipart/form-data" >
                 <!-- CSRF Token -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <input type="hidden" name="id" id="id" value="{{{ $objAsset->id }}}" />                               
                            <h3>Asset Name</h3>
                                                    
                            @if(0 < count($objAssets))
                            
                            @foreach($objAssets as $asset)
                            <tr>
                                <input type="checkbox" name="assets[]" id="assets[]" value="{{$asset->id}}" >        {{  $asset->asset_name  }}
                                <br>  
                                                              
                         <input type="hidden" name="assetid" value="{{ $objAsset->id }}">  
                         </tr>    

							
                            @endforeach
                           
                            @else
                            
                            <td colspan="8" class="alert-danger"><center>No Record found.</center></td>
                            
                            @endif
               				
                    </div>
                </div>
            </div>           
        </div>
    </div>
    
 </form>