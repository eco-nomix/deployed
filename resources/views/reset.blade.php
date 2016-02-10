@extends('layouts.default')



@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Reset Password</div>

                           <form class="form-horizontal" role="form" method="POST" action="/sendResetLink">

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Email</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" value="{{ $email }} readonly">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Password</label>
                                    <div class="col-md-6">
                                        A email was sent to {{$email}}  click on the link to reset your password
                                    </div>
                                </div>



                           </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








@stop