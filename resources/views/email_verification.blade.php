@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Thank you for registering
                  <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-8 col-md-offset-2 control-label">An Email was sent to {{$email}} with a link that will confirm your email address.</label>
                    </div>
                    <div class="form-group">
                         <label class="col-md-8 col-md-offset-2 control-label">Go to your Email and click on the link to verify your email address</label>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop