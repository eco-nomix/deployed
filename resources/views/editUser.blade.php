@extends('layouts.default')

@section('content')
<div class="container-fluid" style="position:absolute; top:52px; z-index:-1">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>
                   <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/xy/admin/edituser/{{$user_id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="user_id" value="{{ $user_id }}" />
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


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                       </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection