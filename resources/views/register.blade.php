@extends('layouts.default')

@section('content')
<div style="position:absolute; top:52px; z-index:-1; right:0; left:auto; width:100%">
    <div style="width:100%">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/On-Line Accounting-small.jpg" ></div>--}}
        <div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
            <div class="skip">&nbsp;</div>
            <div class="trans row">
            <div class="col-md-8 col-md-offset-2">
                <div style="width:100%;">
                    <div class="kinetic600">
                        Register
                    </div>
                </div>            <div class="panel panel-default">

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/register">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="">
                            </div>
                        </div>

                          <div class="col-md-6 col-md-offset-4" style="font-size:16px;">
                            The User Name and Password below will be utilized to create your Gold Digger's Association account.  With this account you will be able to access special membership menus, that will allow you to see your downsteam organization and contact them, among other things.
                            Please select an appropriate User Name and Password to reflect the need for security on this information.
                          </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">New User Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">New Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirm New Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
  <div class="skip">&nbsp;</div>
        <div class="skip">&nbsp;</div>
          <div class="skip">&nbsp;</div>
            <div class="skip">&nbsp;</div>
              <div class="skip">&nbsp;</div>
                <div class="skip">&nbsp;</div>
                  <div class="skip">&nbsp;</div>
                    <div class="skip">&nbsp;</div>
                      <div class="skip">&nbsp;</div>
    </div>
</div>
</div>
@endsection