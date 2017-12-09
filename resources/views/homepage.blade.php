@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-12 col-md-offset-1">
             <div class="panel panel-default display">
                 <div class="panel-heading">Personal Information</div>
                 <div class="panel-body">

                     <form id='Upload' class="form-horizontal" role="form" method="POST" action="/homepage/{{$user_id}}" enctype="multipart/form-data">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">

                         <div class="form-group">
                             <label class="col-md-4 control-label">UserId</label>
                             <div class="col-md-6">
                                 {{$user_id}}
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-4 control-label">UserName</label>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="username" value="{{ $username }}">
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-4 control-label">Password</label>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="password" value="{{ $password }}">
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-4 control-label">First Name</label>
                             <div class="col-md-6">
                             <input type="text" class="form-control" name="first_name" value="{{$first_name}}">
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-4 control-label">Last Name</label>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="last_name" value="{{$last_name}}">
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-4 control-label">E-Mail Address</label>
                             <div class="col-md-6">
                                 <input type="email" class="form-control" name="email" value="{{$email}}">
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-4 control-label">Home Phone</label>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="home_phone" value="{{$home_phone}}">
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-4 control-label">Cell Phone</label>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="cell_phone" value="{{$cell_phone}}">
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-4 control-label">Address 1</label>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="addr1" value="{{$addr1}}">
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-4 control-label">Address 2</label>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="addr2"  value="{{$addr2}}">
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-4 control-label">City</label>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="city"  value="{{$city}}">
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-4 control-label">State</label>
                             <div class="col-md-6">
                                 <input type="text" class="form-control" name="state"  value="{{$state}}">
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-4 control-label">Country</label>
                             <div class="col-md-6">
                             <input type="text" class="form-control" name="country"  value="{{$country}}">
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-4 control-label">Zip Code</label>
                             <div class="col-md-6">
                                  <input type="text" class="form-control" name="postal_code"  value="{{$postal_code}}">
                             </div>
                         </div>
                         <div class="form-group">
                             <label class="col-md-4 control-label">Social Security Number</label>
                             <div class="col-md-6">
                               <input type="text" class="form-control" name="social_security"  value="{{$social_security}}">
                             </div>
                         </div>
                         <div class="form-group col-md-12 ">
                             <label class="col-md-4 control-label">Member Story</label>
                             <div class="col-md-6">
                                   <textarea rows="4" cols="80" class="form-control" name="member_story" >{{$member_story}}</textarea>
                             </div>
                         </div>
                         <div class="form-group col-md-12 ">
                            <label class="col-md-4 control-label">Member Status</label>
                                                         <div class="col-md-6">
                                                             {!! $MemberStatus !!}
                                                         </div>
                         </div>
                         <div class="form-group">
                                <label class="col-md-4 control-label">Current Picture</label>
                                <div class="col-md-6">
                                    <div align="center" style="border:black solid 1px; display:table-cell; vertical-align:middle; text-align:center; width:200px; height:60px;">
                                         <img src="{{URL::to('/')}}/images/{{$picture}}" width="150"  >
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">New Picture</label>
                                <div class="col-md-6">
                                    <input id='file' type="file" class="form-control" name="file" ></text>
                                </div>
                            </div>

                         <div class="form-group">
                             <div class="col-md-6 col-md-offset-4">
                                 <button type="submit" class="btn btn-primary">
                                     Update
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