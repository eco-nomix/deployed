@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Awaiting Payment </div>
                <div class="panel-body">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                             <label class="col-md-10 control-label">Your membership in Eco-nomix is waiting for your payment.</label>

                        </div>
                        <div class="form-group">
                             <label class="col-md-10 col-md-offset-1 text-left">Please send $35.00 to:</label>
                            </div>
                            <div class="form-group">
                                 <label class="col-md-10 col-md-offset-2 text-left">Eco-nomix</label>
                            </div>
                        <div class="form-group">
                              <label class="col-md-10 col-md-offset-2 text-left">8029 Highway 641 S.</label>
                        </div>
                        <div class="form-group">
                              <label class="col-md-10 col-md-offset-2 text-left">Paris,  Tennessee   38242</label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-10  text-left">we accept cash, checks or money orders</label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-10  text-left">Be sure to include with your remittance your member number  of #{{$userId}} and your Registered Name of {{$username}}</label>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection