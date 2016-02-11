@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Resetting Password</div>

                           <form class="form-horizontal" role="form" method="POST" action="/sendResetLink">



                                <div class="form-group">
                                     <div class="col-md-8 col-md-offset-3">
                                        A email was sent to {{$email}}  click on the link in your Email to reset your password
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