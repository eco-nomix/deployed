@extends('...layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-12 col-md-offset-1">
             <div class="panel panel-default display">
                 <div class="panel-heading">Edit {{$name}} </div>
                 <div class="panel-body">

                     <form id='Upload' class="form-horizontal" role="form" method="POST" action="/store/edit/{{$id}}" enctype="multipart/form-data">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <input type="hidden" store_id = "{{$storeId}}">
                         <div class="form-group">
                             <label class="col-md-3 control-label">Your existing {{$store_type}}</label>
                              <div class="col-md-7">
                                  <select name="edit" onchange="editBoutique(this)">
                                      <option value="0">Choose to Edit Existing Store</option>
                                      @foreach($stores as $key=>$store)
                                          <option value="{{$key}}">{{$store}} </option>
                                      @endforeach
                                  </select>
                              </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Name of {{$store_type}}</label>
                             <div class="col-md-9">
                                 <input type="text" class="form-control" name="name" value="{{$name}}">
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Short Description</label>
                             <div class="col-md-9">
                                 <textarea type="text" class="form-control" name="gen_description" >{{$gen_description}}</textarea>
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Long Description</label>
                             <div class="col-md-9">
                                 <textarea type="text" class="form-control" name="detailed_description" >{{$detailed_description}}</textarea>
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Owner Description</label>
                             <div class="col-md-9">
                                 <textarea type="text" class="form-control" name="owner_description" >{{$owner_description}}</textarea>
                             </div>
                         </div>
                         <div class="form-group">
                               <label class="col-md-3 control-label">Allow Custom Requests</label>
                               <div class="col-md-9">
                                    <select name="allow_custom_requests">
                                        <option value="0" @if($allow_custom_requests==0) selected @endif>NO</option>
                                        <option value="1" @if($allow_custom_requests==1) selected @endif>YES</option>
                                    </select>
                               </div>
                         </div>
                         <div class="form-group">
                              <label class="col-md-3 control-label">Shipping</label>
                              <div class="col-md-9">
                                  <select name="shipping_id">

                                      @foreach($shippingTypes as $key=>$shipping)

                                          <option value="{{$key}}" @if($shipping_id == $key) Selected @endif >{{$shipping}}</option>
                                      @endforeach
                                  </select>
                              </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Handling Charge</label>
                             <div class="col-md-9">
                                <input type="number" class="form-control" name="handling" value="{{$handling_charge}}" step = ".01">
                             </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-3 control-label">Current Logo</label>
                               <div class="col-md-9">
                                    <div align="center" style="border:black solid 1px; display:table-cell; vertical-align:middle; text-align:center; width:200px; height:60px;"><img src="/images/{{$logo}}" width="150"  ></div>
                               </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-3 control-label">Logo Image File</label>
                             <div class="col-md-9">
                                <input id='file' type="file" class="form-control" name="file" value="{{$logo}}" >
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="col-md-3 col-md-offset-3">
                                 <button type="submit" class="btn btn-primary">
                                     Update {{$store_type}}
                                 </button>
                                 <button name="Delete" type="submit" class="btn btn-warning" value="Yes">
                                     Delete {{$store_type}}
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