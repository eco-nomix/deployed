@extends('layouts.default')

@section('content')
<div style="position:absolute; top:52px; z-index:-1;right:0; left:auto; width:100% ">
    <div style="width:100%">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/On-Line Accounting-small.jpg" ></div>--}}
        <div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
            <div class="skip">&nbsp;</div>
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div style="width:100%;">
                    <div class="kinetic600">
                        Login
                    </div>
                </div>
            <div class="panel panel-default">

                   <div class="panel-body">
                        @if ($errors != '')
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> {{$errors}}<br><br>

                        </div>
                    @endif

                       <form class="form-horizontal" role="form" method="POST" action="/login">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="form-group">
                                <label class="col-md-4 control-label">UserName</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="username" value="{{ $username }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password" value="">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                     <button type="submit" class="btn btn-primary">
                                          Submit
                                     </button>
                                     @if($reset == 'yes')
                                        <input name="Reset" class="btn btn-primary pull-right" type="submit" value="Reset Password">
                                     @endif
                                </div>
                            </div>
                       </form>
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
                      <div class="skip">&nbsp;</div>
                       <div class="skip">&nbsp;</div>
                       
        </div>
    </div>
    </div>
</div>

@endsection