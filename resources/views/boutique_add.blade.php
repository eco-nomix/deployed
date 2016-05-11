@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-12 col-md-offset-1">
             <div class="panel panel-default display">
                 <div class="panel-heading">Add New Boutique</div>
                 <div class="panel-body">
                    {{--{!! Form::open(['url'=>"/boutique/add/$user_id",'method'=>'POST','files'=>true]) !!}--}}
                     <form id='Upload' class="form-horizontal" role="form" method="POST" action="/boutique/add/{{$user_id}}" enctype="multipart/form-data">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <div class="form-group">
                             <label class="col-md-3 control-label">Your existing Boutiques</label>
                              <div class="col-md-7">
                                  <select name="edit" onchange="editBoutique(this)">
                                      <option value="0">Choose to Edit Existing Boutique</option>
                                      @foreach($boutiques as $key=>$boutique)
                                          <option value="{{$key}}">{{$boutique}}</option>
                                      @endforeach
                                  </select>
                              </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Name of Boutique</label>
                             <div class="col-md-9">
                                 <input type="text" class="form-control" name="name" value="">
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Short Description</label>
                             <div class="col-md-9">
                                 <textarea type="text" class="form-control" name="gen_description" ></textarea>
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Long Description</label>
                             <div class="col-md-9">
                                 <textarea type="text" class="form-control" name="detailed_description" ></textarea>
                             </div>
                         </div>
                          <div class="form-group">
                              <label class="col-md-3 control-label">Owner Description</label>
                              <div class="col-md-9">
                                  <textarea type="text" class="form-control" name="owner_description" ></textarea>
                              </div>
                          </div>
                         <div class="form-group">
                               <label class="col-md-3 control-label">Allow Custom Requests</label>
                               <div class="col-md-9">
                                    <select name="allow_custom_requests">
                                        <option value="0">NO</option>
                                        <option value="1">YES</option>
                                    </select>
                               </div>
                         </div>
                         <div class="form-group">
                              <label class="col-md-3 control-label">Shipping</label>
                              <div class="col-md-9">
                                  <select name="shipping_id">

                                      @foreach($shippingTypes as $key=>$shipping)
                                          <option value="{{$key}}">{{$shipping}}</option>
                                      @endforeach
                                  </select>
                              </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Handling Charge</label>
                             <div class="col-md-9">
                                <input type="number" class="form-control" name="handling" step = ".01" ></text>
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Logo Image File</label>
                             <div class="col-md-9">
                                <input id='file' type="file" class="form-control" name="file" ></text>
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="col-md-6 col-md-offset-3">
                                 <button type="submit" class="btn btn-primary">
                                     Add Boutique
                                 </button>
                             </div>
                         </div>
                     {{--{!! Form::close() !!}--}}
                     </form>
                  </div>
               </div>
            </div>
        </div>
     </div>
  </div>
</div>








@stop