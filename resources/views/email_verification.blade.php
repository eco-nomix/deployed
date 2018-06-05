@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1;  right:0; left:auto; width:100%">
    <div style="width:100%">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/On-Line Accounting-small.jpg" ></div>--}}
        <div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
            <div class="skip">&nbsp;</div>
            <div class="trans row">
            <div class="col-md-8 col-md-offset-2">
                <div style="width:100%;">
                    <div class="kinetic600">
                        Thank you for Registering
                    </div>
                </div>
            <div class="panel panel-default">

                  <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-10 col-md-offset-1 control-label">An Email was sent to {{$email}} with a link that will confirm your email address.</label>
                    </div>
                    <div class="form-group">
                         <label class="col-md-10 col-md-offset-1 control-label">Go to your Email and click on the link to verify your email address</label>
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
            <div class="skip">&nbsp;</div>
            <div class="skip">&nbsp;</div>
            <div class="skip">&nbsp;</div>
        </div>
    </div>
</div>

@stop